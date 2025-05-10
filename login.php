<?php
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "sep_project");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check by email or phone
    $sql = "SELECT * FROM users WHERE (email = '$username') AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        header("Location: home.php"); // redirect after successful login
        exit();
    } else {
        $error = "Invalid username or password";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Course Platform</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    .static-icon {
      position: absolute;
      color: #b19cd9;
      font-size: 3rem;
      opacity: 0.2;
      z-index: 1;
    }
    .error-text {
      color: red;
      margin-bottom: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Background icons -->
  <!-- (your existing static icon HTML remains unchanged) -->

  <!-- Navigation -->
  <div id="navbar">
    <script src="js/main.js"></script>
    <script>
      fetch("nav.html")
        .then((res) => res.text())
        .then((data) => {
          document.getElementById("navbar").innerHTML = data;
        });
    </script>
  </div>

  <!-- Login Form -->
  <div class="form-container">
    <form class="login-form" method="POST" action="">
      <h2>Welcome Back!</h2>
      <?php if (!empty($error)) echo "<div class='error-text'>$error</div>"; ?>

      <div class="form-group">
        <label for="username">Username (Email)</label>
        <div class="input-with-icon">
          <i class="fas fa-user"></i>
          <input type="text" id="username" name="username" required placeholder="Enter your email or phone" />
        </div>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-with-icon">
          <i class="fas fa-lock"></i>
          <input type="password" id="password" name="password" require  d placeholder="Enter your password" />
          <button type="button" class="toggle-password" onclick="togglePassword()" aria-label="Toggle password visibility">
            <i class="fas fa-eye"></i>
          </button>
        </div>
      </div>

      <div class="form-options">
        <label class="remember-me">
          <input type="checkbox" id="remember" name="remember" />
          <span>Remember me</span>
        </label>
        <a href="#" class="forgot-password">Forgot Password?</a>
      </div>

      <button type="submit" class="btn primary-btn">
        <i class="fas fa-sign-in-alt"></i> Login
      </button>

      <p>Don't have an account? <a href="register.php">Register</a></p>
    </form>
  </div>

  <script>
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const icon = document.querySelector(".toggle-password i");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      } else {
        passwordInput.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      }
    }
  </script>
</body>
</html>
