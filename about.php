<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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
        opacity: 0.8;
        z-index: 1;
      }
    </style>
  </head>
  <body>
    <i
      class="fas fa-rocket static-icon"
      style="top: 2%; right: 2%; font-size: 2.5rem"
    ></i>
    <i
      class="fas fa-paint-brush static-icon"
      style="top: 2%; left: 2%; font-size: 2.8rem"
    ></i>
    <i
      class="fas fa-music static-icon"
      style="top: 15%; right: 25%; font-size: 2.6rem"
    ></i>
    <i
      class="fas fa-camera static-icon"
      style="top: 10%; left: 25%; font-size: 2.7rem"
    ></i>
    <i
      class="fas fa-gamepad static-icon"
      style="top: 30%; right: 2%; font-size: 2.4rem"
    ></i>
    <i
      class="fas fa-brain static-icon"
      style="top: 30%; left: 2%; font-size: 2.9rem"
    ></i>
    <i
      class="fas fa-lightbulb static-icon"
      style="top: 53%; right: 25%; font-size: 2.5rem"
    ></i>
    <i
      class="fas fa-laptop-code static-icon"
      style="top: 50%; left: 25%; font-size: 2.6rem"
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
      style="bottom: 8%; right: 2%; font-size: 2.7rem"
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

    <main class="about-container">
      <section class="hero-section">
        <div class="hero-content">
          <h1 class="animate-text">About Us</h1>
          <p class="subtitle">
            Elearn is a global training provider based across the UK that
            specialises in accredited and bespoke training courses. We are
            committed to delivering high-quality education and empowering
            learners for a smarter future.
          </p>
        </div>
        <div class="hero-image">
          <i class="fas fa-graduation-cap hero-icon"></i>
        </div>
      </section>

      <section class="features-section">
        <div class="feature-card">
          <i class="fas fa-book-open feature-icon"></i>
          <h3>Quality Education</h3>
          <p>Accredited courses designed by industry experts</p>
        </div>

        <div class="feature-card">
          <i class="fas fa-clock feature-icon"></i>
          <h3>Flexible Learning</h3>
          <p>Learn at your own pace, anytime, anywhere</p>
        </div>

        <div class="feature-card">
          <i class="fas fa-headset feature-icon"></i>
          <h3>Expert Support</h3>
          <p>24/7 assistance from qualified instructors</p>
        </div>
      </section>

      <section class="stats-section">
        <i
          class="fas fa-trophy static-icon"
          style="position: absolute; bottom: -50px; left: 5%; font-size: 2.6rem"
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
        <i
          class="fas fa-award static-icon"
          style="
            position: absolute;
            bottom: -50px;
            left: 35%;
            font-size: 2.5rem;
          "
        ></i>
        <i
          class="fas fa-star static-icon"
          style="
            position: absolute;
            bottom: -50px;
            right: 35%;
            font-size: 2.8rem;
          "
        ></i>

        <div class="stat-item">
          <i class="fas fa-users stat-icon"></i>
          <h2 class="counter">10K+</h2>
          <p>Active Students</p>
        </div>

        <div class="stat-item">
          <i class="fas fa-book feature-icon"></i>
          <h2 class="counter">500+</h2>
          <p>Courses Available</p>
        </div>

        <div class="stat-item">
          <i class="fas fa-star stat-icon"></i>
          <h2 class="counter">95%</h2>
          <p>Satisfaction Rate</p>
        </div>
      </section>
    </main>

    <script src="js/main.js"></script>
    <script>
      const counters = document.querySelectorAll(".counter");
      counters.forEach((counter) => {
        const target = parseInt(counter.innerText);
        let count = 0;
        const updateCount = () => {
          const increment = target / 100;
          if (count < target) {
            count += increment;
            counter.innerText =
              Math.ceil(count) + (counter.innerText.includes("%") ? "%" : "+");
            setTimeout(updateCount, 20);
          }
        };
        updateCount();
      });
    </script>
  </body>
</html>
