<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "sep_project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$course_id = $_GET['course_id'] ?? null; // Get course_id from URL
$action = $_GET['action'] ?? 'list'; // Default action is to list courses

// Handle Course forum actions: Add Topic, View Topics
if ($action == 'add_topic' && $_SERVER['REQUEST_METHOD'] === 'POST' && $course_id) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert a new forum topic for the course
    $stmt = $conn->prepare("INSERT INTO forum_topics (course_id, title, content) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $course_id, $title, $content);
    $stmt->execute();
    header("Location: ?course_id=$course_id");
    exit;
}

// Display course list
if ($action === 'list') {
    // Fetch all courses
    $courses_result = mysqli_query($conn, "SELECT * FROM courses");
}

// Display forum for a specific course
if ($course_id && $action === 'forum') {
    // Fetch forum topics for the course
    $stmt = $conn->prepare("SELECT * FROM forum_topics WHERE course_id = ?");
    $stmt->bind_param("i", $course_id);
    $stmt->execute();
    $forum_result = $stmt->get_result();
}

// Handle notifications
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_notification'])) {
    $user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
    $notification_content = "New assignment posted!";
    
    $stmt = $conn->prepare("INSERT INTO notifications (user_id, course_id, content) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $user_id, $course_id, $notification_content);
    $stmt->execute();
    echo "<script>alert('Notification sent successfully!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course Discussion Forum</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
    .container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #ccc; }
    th { background: #3498db; color: white; }
    .button { padding: 10px 20px; color: white; background: #3498db; border: none; cursor: pointer; }
    .button:hover { background: #2980b9; }
    form input, form textarea { width: 100%; padding: 8px; margin: 5px 0; }
  </style>
</head>
<body>

<div class="container">

    <?php if ($action == 'list'): ?>
        <h2>Available Courses</h2>
        <table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($courses_result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['course_name']) ?></td>
                        <td><a href="?action=forum&course_id=<?= $row['id'] ?>">Go to Forum</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <?php if ($course_id && $action == 'forum'): ?>
        <h2>Discussion Forum for Course ID: <?= htmlspecialchars($course_id) ?></h2>
        
        <h3>Post a New Topic</h3>
        <form method="POST" action="?action=add_topic&course_id=<?= $course_id ?>">
            <label>Title</label>
            <input type="text" name="title" required>
            <label>Content</label>
            <textarea name="content" required></textarea>
            <button type="submit" class="button">Post Topic</button>
        </form>

        <h3>Forum Topics</h3>
        <?php while ($forum_topic = $forum_result->fetch_assoc()): ?>
            <div style="margin-top: 20px; padding: 10px; border: 1px solid #ddd;">
                <h4><?= htmlspecialchars($forum_topic['title']) ?></h4>
                <p><?= nl2br(htmlspecialchars($forum_topic['content'])) ?></p>
            </div>
        <?php endwhile; ?>
        
        <form method="POST">
            <button type="submit" name="send_notification" class="button">Send Assignment Notification</button>
        </form>
    <?php endif; ?>

</div>

</body>
</html>

<?php
// Close connection
mysqli_close($conn);
?>
