<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "sep_project");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get form data
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $dob      = $_POST['dob'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirmPassword'];

    // Check if passwords match
    if ($password != $confirm) {
        echo "<script>alert('Passwords do not match.');</script>";
    } else {
        // Insert into database
        $sql = "INSERT INTO users (name, email, phone, address, dob, password)
                VALUES ('$name', '$email', '$phone', '$address', '$dob', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration successful!');</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <style>
      .static-icon {
        position: absolute;
        color: #b19cd9;
        font-size: 3rem;
        opacity: 0.2;
        z-index: 1;
        transition: transform 0.3s ease;
      }

      .static-icon:hover {
        transform: scale(1.1);
        opacity: 0.3;
      }

      .icon-small {
        font-size: 2rem;
        opacity: 0.15;
      }

      .icon-large {
        font-size: 4rem;
        opacity: 0.25;
      }

      .icon-rotate {
        transform: rotate(15deg);
      }

      .icon-rotate-reverse {
        transform: rotate(-15deg);
      }

      .register-form-container {
        position: relative;
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
      }

      .register-form {
        position: relative;
        z-index: 2;
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      }

      .icon-cluster {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
      }

      .form-columns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .button-container {
        text-align: center;
        margin-top: 20px;
      }

      .button-container button {
        min-width: 200px;
      }
    </style>
  </head>
  <body>
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

    <div class="register-form-container">
      <form class="register-form" id="registerForm" method="POST" action="">
        <h2>Create Account</h2>
        <div class="form-columns">
          <div class="form-group">
            <label for="name">Full Name</label>
            <div class="input-with-icon">
              <input type="text" id="name" name="name" required placeholder="Enter your full name"/>
              <i class="fas fa-user"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address</label>
            <div class="input-with-icon">
              <input type="email" id="email" name="email" required placeholder="Enter your email"/>
              <i class="fas fa-envelope"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="phone">Phone Number</label>
            <div class="input-with-icon">
              <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number"/>
              <i class="fas fa-phone"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="address">Address</label>
            <div class="input-with-icon">
              <input type="text" id="address" name="address" required placeholder="Enter your address"/>
              <i class="fas fa-map-marker-alt"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="dob">Date of Birth</label>
            <div class="input-with-icon">
              <input type="date" id="dob" name="dob" required />
              <i class="fas fa-calendar"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <div class="input-with-icon">
              <input type="password" id="password" name="password" required placeholder="Create a password"/>
              <i class="fas fa-lock"></i>
              <i class="fas fa-eye toggle-password"></i>
            </div>
          </div>

          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <div class="input-with-icon">
              <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Confirm your password"/>
              <i class="fas fa-lock"></i>
              <i class="fas fa-eye toggle-password"></i>
            </div>
          </div>
        </div>

        <div class="button-container">
          <button type="submit" class="btn primary-btn">
            <i class="fas fa-user-plus"></i> Create Account
          </button>
        </div>

        <p style="text-align: center">
          Already have an account? <a href="login.html">Login here</a>
        </p>
      </form>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
