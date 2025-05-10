<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <style>
      .static-icon {
        position: absolute;
        color: #b19cd9;
        font-size: 3rem;
        opacity: 0.2;
        z-index: 1;
      }
    </style>
  </head>
  <body>
    <i class="fas fa-comments static-icon" style="top: 10%; right: 55%"></i>
    <i class="fas fa-headset static-icon" style="top: 35%; left: 3%"></i>
    <i
      class="fas fa-envelope-open-text static-icon"
      style="top: 70%; right: 3%"
    ></i>
    <i class="fas fa-handshake static-icon" style="bottom: 5%; left: 2%"></i>
    <i class="fas fa-globe static-icon" style="bottom: 45%; right: 5%"></i>
    <i
      class="fas fa-camera static-icon"
      style="top: 10%; left: 15%; font-size: 2.7rem"
    ></i>
    <i
      class="fas fa-gamepad static-icon"
      style="top: 10%; right: 15%; font-size: 2.4rem"
    ></i>
    <i
      class="fas fa-brain static-icon"
      style="top: 30%; left: 2%; font-size: 2.9rem"
    ></i>
    <i
      class="fas fa-chart-line static-icon"
      style="top: 60%; right: 2%; font-size: 2.7rem"
    ></i>
    <i
      class="fas fa-atom static-icon"
      style="top: 60%; left: 2%; font-size: 2.8rem"
    ></i>
    <i
      class="fas fa-globe static-icon"
      style="bottom: 15%; right: 2%; font-size: 2.7rem"
    ></i>

    <div id="navbar">
      <script src="js/main.js"></script>
  <script>
    fetch("nav.html")
      .then((res) => res.text())
      .then((data) => {
        document.getElementById("navbar").innerHTML = data;
      });
  </script>
</body>

<nav class="navbar">
  <div class="logo">
    <img
      src="images/Group 328.png"
      alt="Logo"
      style="height: 32px; vertical-align: middle"
    />
  </div>
  <ul class="nav-links">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="view_courses.php">Courses</a></li>
    <li><a href="#">Classes</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="login.php" class="btn">Sign in</a></li>
  </ul>
  <div class="hamburger">&#9776;</div>
    </div>
    <section class="contact-section">
      <h1 class="animate-text">Contact Us</h1>
      <div class="contact-container">
        <div class="contact-form-container">
          <form class="contact-form">
            <div class="form-group">
              <i class="fas fa-user form-icon"></i>
              <label>Name</label>
              <input type="text" required placeholder="Enter your name" />
            </div>
            <div class="form-group">
              <i class="fas fa-envelope form-icon"></i>
              <label>Email</label>
              <input type="email" required placeholder="Enter your email" />
            </div>
            <div class="form-group">
              <i class="fas fa-message form-icon"></i>
              <label>Message</label>
              <textarea
                required
                placeholder="Type your message here..."
              ></textarea>
            </div>
            <button type="submit" class="btn">
              <i class="fas fa-paper-plane"></i> Send Message
            </button>
          </form>
        </div>
        <div class="contact-info">
          <i
            class="fas fa-trophy static-icon"
            style="
              position: absolute;
              bottom: -50px;
              left: 5%;
              font-size: 2.6rem;
            "
          ></i>
          <i
            class="fas fa-medal static-icon"
            style="
              position: absolute;
              bottom: -50px;
              right: 5%;
              font-size: 2.7rem;
            "
          ></i>
          <div class="info-item">
            <i class="fas fa-map-marker-alt info-icon"></i>
            <h3>Our Location</h3>
            <p>123 Education Street, London, UK</p>
          </div>
          <div class="info-item">
            <i class="fas fa-phone info-icon"></i>
            <h3>Phone Number</h3>
            <p>+44 123 456 7890</p>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope info-icon"></i>
            <h3>Email Address</h3>
            <p>contact@elearn.com</p>
          </div>
        </div>
      </div>
    </section>
    <script src="js/main.js"></script>
  </body>
</html>
