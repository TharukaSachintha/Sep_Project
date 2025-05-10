<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['username'])) {
    echo "<script>alert('You must be logged in to register for a course.'); window.location.href = 'login.php';</script>";
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "sep_project");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId   = $_SESSION['username'];
    $courseId = $_POST['course_id'];

    // Check for duplicate registration
    $checkQuery = "SELECT * FROM course_registrations WHERE user_id = ? AND course_id = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ii", $userId, $courseId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "You are already registered for this course.";
    } else {
        $insertQuery = "INSERT INTO course_registrations (user_id, course_id) VALUES (?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ii", $userId, $courseId);
        if ($stmt->execute()) {
            $message = "Registration successful!";
        } else {
            $message = "Error: " . $stmt->error;
        }
    }
    $stmt->close();
}

// Load courses
$courses = [];
$result = mysqli_query($conn, "SELECT id, course_name FROM courses");
while ($row = mysqli_fetch_assoc($result)) {
    $courses[] = $row;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Course Registration</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    .register-form-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 20px;
    }

    .register-form {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .button-container {
      text-align: center;
      margin-top: 20px;
    }

    select, button {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
    }

    .message {
      text-align: center;
      font-weight: bold;
      margin-bottom: 20px;
      color: green;
    }
  </style>
</head>
<body>
  <div id="navbar">
    <script src="js/main.js"></script>
    <script>
      fetch("nav.html")
        .then(res => res.text())
        .then(data => {
          document.getElementById("navbar").innerHTML = data;
        });
    </script>
  </div>

  <div class="register-form-container">
    <form class="register-form" method="POST" action="">
      <h2>Register for a Course</h2>

      <?php if ($message): ?>
        <p class="message"><?= htmlspecialchars($message) ?></p>
      <?php endif; ?>

      <div class="form-group">
        <label for="course_id">Select Course</label>
        <select name="course_id" id="course_id" required>
          <option value="">-- Select a Course --</option>
          <?php foreach ($courses as $course): ?>
            <option value="<?= $course['id'] ?>"><?= htmlspecialchars($course['course_name']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="button-container">
        <button type="submit">
          <i class="fas fa-book-open"></i> Register
        </button>
      </div>
    </form>
  </div>
</body>
</html>
