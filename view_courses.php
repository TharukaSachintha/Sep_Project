<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must be logged in to access the dashboard.'); window.location.href = 'login.php';</script>";
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "sep_project");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get action and course ID (if present)
$action = $_GET['action'] ?? 'list';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Handle CREATE
if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['course_name'];
    $desc = $_POST['description'];
    $duration = $_POST['duration'];
    $category = $_POST['category'];

    $pdf_path = null;
    $video_path = null;

    if (!empty($_FILES['pdf_file']['name'])) {
        $pdf_path = 'uploads/' . basename($_FILES['pdf_file']['name']);
        move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_path);
    }

    if (!empty($_FILES['video_file']['name'])) {
        $video_path = 'uploads/' . basename($_FILES['video_file']['name']);
        move_uploaded_file($_FILES['video_file']['tmp_name'], $video_path);
    }

    $stmt = $conn->prepare("INSERT INTO courses (course_name, description, duration, category, pdf_path, video_path) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $desc, $duration, $category, $pdf_path, $video_path);
    $stmt->execute();
    header("Location: course_manage.php");
    exit;
}

// Handle UPDATE
if ($action === 'edit' && $_SERVER['REQUEST_METHOD'] === 'POST' && $id) {
    $name = $_POST['course_name'];
    $desc = $_POST['description'];
    $duration = $_POST['duration'];
    $category = $_POST['category'];

    $pdf_path = !empty($_FILES['pdf_file']['name']) ? 'uploads/' . basename($_FILES['pdf_file']['name']) : null;
    $video_path = !empty($_FILES['video_file']['name']) ? 'uploads/' . basename($_FILES['video_file']['name']) : null;

    if ($pdf_path) {
        move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_path);
    } else {
        $pdf_path = mysqli_fetch_assoc(mysqli_query($conn, "SELECT pdf_path FROM courses WHERE id=$id"))['pdf_path'];
    }

    if ($video_path) {
        move_uploaded_file($_FILES['video_file']['tmp_name'], $video_path);
    } else {
        $video_path = mysqli_fetch_assoc(mysqli_query($conn, "SELECT video_path FROM courses WHERE id=$id"))['video_path'];
    }

    $stmt = $conn->prepare("UPDATE courses SET course_name=?, description=?, duration=?, category=?, pdf_path=?, video_path=? WHERE id=?");
    $stmt->bind_param("ssssssi", $name, $desc, $duration, $category, $pdf_path, $video_path, $id);
    $stmt->execute();
    header("Location: course_manage.php");
    exit;
}

// Handle DELETE
if ($action === 'delete' && $id) {
    $stmt = $conn->prepare("DELETE FROM courses WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: course_manage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Courses</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
    .container { max-width: 1000px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
    h2 { text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { padding: 10px; border: 1px solid #ccc; }
    th { background: #3498db; color: white; }
    .action-btn { text-decoration: none; padding: 6px 12px; margin: 0 2px; border-radius: 4px; color: white; }
    .add-btn { background: #27ae60; }
    .edit-btn { background: #f39c12; }
    .delete-btn { background: #e74c3c; }
    form input, form textarea, form select { width: 100%; padding: 8px; margin: 5px 0; }
    form button { padding: 10px 15px; background: #3498db; color: white; border: none; border-radius: 4px; }
  </style>
</head>
<body>

<!-- Load navbar -->
<div id="navbar">
  <script>
    fetch("nav.html")
      .then(res => res.text())
      .then(data => {
        document.getElementById("navbar").innerHTML = data;
      });
  </script>
</div>

<div class="container">

<?php if ($action === 'create' || ($action === 'edit' && $id)): ?>
  <?php
    $course = ['course_name' => '', 'description' => '', 'duration' => '', 'category' => ''];
    if ($action === 'edit' && $id) {
        $stmt = $conn->prepare("SELECT * FROM courses WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $course = $result->fetch_assoc();
        if (!$course) {
            echo "<p>Course not found.</p>";
            exit;
        }
    }
  ?>
  <h2><?= $action === 'create' ? 'Add New Course' : 'Edit Course' ?></h2>
  <form method="post" action="?action=<?= $action ?>&id=<?= $id ?>" enctype="multipart/form-data">
    <label>Course Name:</label>
    <input type="text" name="course_name" value="<?= htmlspecialchars($course['course_name']) ?>" required>
    <label>Description:</label>
    <textarea name="description" required><?= htmlspecialchars($course['description']) ?></textarea>
    <label>Duration:</label>
    <input type="text" name="duration" value="<?= htmlspecialchars($course['duration']) ?>" required>
    <label>Category:</label>
    <input type="text" name="category" value="<?= htmlspecialchars($course['category']) ?>">
    <label>PDF File (optional):</label>
    <input type="file" name="pdf_file" accept="application/pdf">
    <label>Video File (optional):</label>
    <input type="file" name="video_file" accept="video/mp4">
    <button type="submit"><?= $action === 'create' ? 'Create' : 'Update' ?> Course</button>
    <a href="course_manage.php">Cancel</a>
  </form>

<?php else: ?>
  <h2>Course List</h2>
  <a class="action-btn add-btn" href="?action=create">+ Add New Course</a>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Duration</th>
        <th>Category</th>
        <th>PDF</th>
        <th>Video</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $result = mysqli_query($conn, "SELECT * FROM courses");
        while ($row = mysqli_fetch_assoc($result)):
      ?>
        <tr>
          <td><?= htmlspecialchars($row['course_name']) ?></td>
          <td><?= htmlspecialchars($row['description']) ?></td>
          <td><?= htmlspecialchars($row['duration']) ?></td>
          <td><?= htmlspecialchars($row['category']) ?></td>
          <td>
            <?php if (!empty($row['pdf_path'])): ?>
              <a href="<?= $row['pdf_path'] ?>" target="_blank">PDF</a>
            <?php else: ?> - <?php endif; ?>
          </td>
          <td>
            <?php if (!empty($row['video_path'])): ?>
              <a href="<?= $row['video_path'] ?>" target="_blank">Video</a>
            <?php else: ?> - <?php endif; ?>
          </td>
          <td>
            <a class="action-btn edit-btn" href="?action=edit&id=<?= $row['id'] ?>">Edit</a>
            <a class="action-btn delete-btn" href="?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Delete this course?');">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
<?php endif; ?>

</div>
</body>
</html>

<?php mysqli_close($conn); ?>
