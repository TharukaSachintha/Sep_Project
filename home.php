<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Choice For Future</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .ellipse-bg {
        position: absolute;
        right: 80px;
        top: 95px;
      }
      .ruler-icon {
        position: absolute;
        top: 23%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .bulb-icon {
        position: absolute;
        top: 20%;
        left: 10%;
        transform: translate(-50%, -50%);
      }
      .arrow-icon {
        position: absolute;
        top: 15%;
        left: 90%;
        transform: translate(-50%, -50%);
      }
      .circle-icon {
        position: absolute;
        top: 75%;
        left: 20%;
        transform: translate(-50%, -50%);
      }
      .circle-icon-2 {
        position: absolute;
        top: 78%;
        left: 60%;
        transform: translate(-50%, -50%);
      }
      .circle-icon-3 {
        position: absolute;
        top: 65%;
        left: 40%;
        transform: translate(-50%, -50%);
      }
      .circle-icon-4 {
        position: absolute;
        top: 70%;
        left: 95%;
        transform: translate(-50%, -50%);
      }
      .circle-icon-5 {
        position: absolute;
        top: 95%;
        left: 40%;
        transform: translate(-50%, -50%);
      }
      .circle-icon-6 {
        position: absolute;
        top: 100%;
        left: 80%;
        transform: translate(-50%, -50%);
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
    <section class="hero">
      <img
        src="images/Ellipse 1.png"
        alt="Circle Background"
        class="ellipse-bg"
      />
      <img src="images/Group (5).png" alt="Ruler" class="ruler-icon" />
      <img src="images/Group (1).png" alt="bulb" class="bulb-icon" />
      <img src="images/Group (2).png" alt="Arrow" class="arrow-icon" />
      <img src="images/Group (3).png" alt="Circle" class="circle-icon" />
      <img src="images/Group (4).png" alt="Circle" class="circle-icon-2" />

      <img src="images/Group (6).png" alt="Circle" class="circle-icon-3" />
      <img src="images/Group (7).png" alt="Circle" class="circle-icon-4" />
      <img src="images/Group (8).png" alt="Circle" class="circle-icon-5" />
      <img src="images/Group (9).png" alt="Circle" class="circle-icon-6" />

      <div class="hero-content">
        <h1>
          The <span class="highlight">Smart</span> Choice For
          <span class="highlight">Future</span>
        </h1>
        <p class="subtitle">
          Elearn is a global training provider based across the UK that
          specialises in accredited and bespoke training courses. We crush
          the...
        </p>
        <div class="search-bar">
          <input type="text" placeholder="Search for a location..." />
          <button>Continue</button>
        </div>
      </div>
      <div class="hero-image">
        <img src="images/OBJECTS.png" alt="Hero Illustration" />
      </div>
    </section>
    <section style="padding: 40px 0; background-color: #fdf6ee">
      <div
        style="
          max-width: 1100px;
          margin: auto;
          background-color: #3b0a59;
          border-radius: 12px;
          padding: 40px 20px;
          display: flex;
          justify-content: space-between;
          text-align: center;
          color: #fff;
          font-family: 'Arial', sans-serif;
          flex-wrap: wrap;
        "
      >
        <div style="flex: 1; min-width: 250px; padding: 20px">
          <div
            style="
              background-color: rgba(255, 255, 255, 0.1);
              padding: 15px;
              display: inline-block;
              border-radius: 16px;
              margin-bottom: 15px;
            "
          >
            <img
              src="images/online-test 1.png"
              alt="Learn Skills"
              style="width: 50px"
            />
          </div>
          <h3 style="font-size: 18px; margin-bottom: 10px">
            Learn The Latest Skills
          </h3>
          <p style="font-size: 14px; color: #d1cbd7">
            Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a BC, making it over 2000 years old.
          </p>
        </div>

        <div style="flex: 1; min-width: 250px; padding: 20px">
          <div
            style="
              background-color: rgba(255, 255, 255, 0.1);
              padding: 15px;
              display: inline-block;
              border-radius: 16px;
              margin-bottom: 15px;
            "
          >
            <img src="images/exam 1.png" alt="Career" style="width: 50px" />
          </div>
          <h3 style="font-size: 18px; margin-bottom: 10px">
            Get Ready For a Career
          </h3>
          <p style="font-size: 14px; color: #d1cbd7">
            Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a BC, making it over 2000 years old.
          </p>
        </div>

        <div style="flex: 1; min-width: 250px; padding: 20px">
          <div
            style="
              background-color: rgba(255, 255, 255, 0.1);
              padding: 15px;
              display: inline-block;
              border-radius: 16px;
              margin-bottom: 15px;
            "
          >
            <img
              src="images/certification 1.png"
              alt="Certificate"
              style="width: 50px"
            />
          </div>
          <h3 style="font-size: 18px; margin-bottom: 10px">
            Earn a Certificate
          </h3>
          <p style="font-size: 14px; color: #d1cbd7">
            Contrary to popular belief, Lorem Ipsum is not simply random text.
            It has roots in a BC, making it over 2000 years old.
          </p>
        </div>
      </div>
    </section>

    <section
      style="
        padding: 60px 20px;
        font-family: 'Poppins', sans-serif;
        background-color: #fff;
      "
    >
      <div style="max-width: 1200px; margin: auto; position: relative">
        <img
          src="images/casual-life-3d-idea-lamp 1.png"
          alt="Lightbulb"
          style="position: absolute; top: -20px; left: 0; width: 60px"
        />

        <img
          src="images/Group (9).png"
          alt="Arrow"
          style="position: absolute; top: -20px; right: 0; width: 60px"
        />

        <h2
          style="
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
          "
        >
          Our Tracks
        </h2>
        <p
          style="
            text-align: center;
            color: #666;
            font-size: 16px;
            margin-bottom: 40px;
          "
        >
          Lorem Ipsum is simply dummy text of the printing.
        </p>

        <div
          style="
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 24px;
          "
        >
          <div
            style="
              width: 320px;
              background: #fff;
              border-radius: 12px;
              box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
              overflow: hidden;
            "
          >
            <img
              src="images/Group 337.png"
              alt="Course"
              style="width: 100%; height: 180px; object-fit: cover"
            />
            <div style="padding: 20px">
              <p style="font-size: 13px; color: #999; margin: 0">
                UI/UX Design
              </p>
              <h4 style="margin: 8px 0; font-size: 18px; font-weight: 600">
                UI/UX Design for Beginners
              </h4>
              <p
                style="
                  color: #ff6b00;
                  font-weight: 600;
                  font-size: 16px;
                  margin: 4px 0;
                "
              >
                $98
              </p>
              <div style="color: #ffa534; margin-bottom: 12px">★★★★★</div>
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  font-size: 13px;
                  color: #888;
                  border-top: 1px solid #eee;
                  padding-top: 10px;
                "
              >
                <span>⏱ 22hr 30min</span>
                <span>📚 34 Courses</span>
                <span>👥 250 Sales</span>
              </div>
              <a
                href="course_registration.php"
                style="
                  display: block;
                  margin-top: 16px;
                  text-align: center;
                  padding: 10px;
                  background-color: #ff6b00;
                  color: #fff;
                  font-weight: 500;
                  border-radius: 30px;
                  text-decoration: none;
                "
                >Join Course</a
              >
            </div>
          </div>

          <div
            style="
              width: 320px;
              background: #fff;
              border-radius: 12px;
              box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
              overflow: hidden;
            "
          >
            <img
              src="images/Group 338.png"
              alt="Course"
              style="width: 100%; height: 180px; object-fit: cover"
            />
            <div style="padding: 20px">
              <p style="font-size: 13px; color: #999; margin: 0">
                UI/UX Design
              </p>
              <h4 style="margin: 8px 0; font-size: 18px; font-weight: 600">
                UI/UX Design for Beginners
              </h4>
              <p
                style="
                  color: #ff6b00;
                  font-weight: 600;
                  font-size: 16px;
                  margin: 4px 0;
                "
              >
                $98
              </p>
              <div style="color: #ffa534; margin-bottom: 12px">★★★★★</div>
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  font-size: 13px;
                  color: #888;
                  border-top: 1px solid #eee;
                  padding-top: 10px;
                "
              >
                <span>⏱ 22hr 30min</span>
                <span>📚 34 Courses</span>
                <span>👥 250 Sales</span>
              </div>
              <a
                href="course_registration.php"
                style="
                  display: block;
                  margin-top: 16px;
                  text-align: center;
                  padding: 10px;
                  background-color: #ff6b00;
                  color: #fff;
                  font-weight: 500;
                  border-radius: 30px;
                  text-decoration: none;
                "
                >Join Course</a
              >
            </div>
          </div>

          <div
            style="
              width: 320px;
              background: #fff;
              border-radius: 12px;
              box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
              overflow: hidden;
            "
          >
            <img
              src="images/Group 339.png"
              alt="Course"
              style="width: 100%; height: 180px; object-fit: cover"
            />
            <div style="padding: 20px">
              <p style="font-size: 13px; color: #999; margin: 0">
                UI/UX Design
              </p>
              <h4 style="margin: 8px 0; font-size: 18px; font-weight: 600">
                UI/UX Design for Beginners
              </h4>
              <p
                style="
                  color: #ff6b00;
                  font-weight: 600;
                  font-size: 16px;
                  margin: 4px 0;
                "
              >
                $98
              </p>
              <div style="color: #ffa534; margin-bottom: 12px">★★★★★</div>
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  font-size: 13px;
                  color: #888;
                  border-top: 1px solid #eee;
                  padding-top: 10px;
                "
              >
                <span>⏱ 22hr 30min</span>
                <span>📚 34 Courses</span>
                <span>👥 250 Sales</span>
              </div>
              <a
                href="course_registration.php"
                style="
                  display: block;
                  margin-top: 16px;
                  text-align: center;
                  padding: 10px;
                  background-color: #ff6b00;
                  color: #fff;
                  font-weight: 500;
                  border-radius: 30px;
                  text-decoration: none;
                "
                >Join Course</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <section
      style="
        padding: 60px 20px;
        background-color: #fffaf4;
        font-family: 'Poppins', sans-serif;
      "
    >
      <div
        style="
          max-width: 1200px;
          margin: auto;
          display: flex;
          align-items: center;
          justify-content: space-between;
          flex-wrap: wrap;
        "
      >
        <div style="flex: 1 1 400px; text-align: center">
          <img
            src="images/OBJECTS (1).png"
            alt="Learning Illustration"
            style="max-width: 100%; width: 400px"
          />
        </div>

        <div style="flex: 1 1 500px; padding: 20px">
          <h2 style="font-size: 36px; font-weight: 700; color: #000">
            Premium <span style="color: #ff7a00">Learning</span><br />
            Experience
          </h2>

          <div style="margin-top: 30px">
            <div
              style="display: flex; align-items: center; margin-bottom: 20px"
            >
              <div
                style="
                  background-color: #4d2c5e;
                  padding: 10px;
                  border-radius: 10px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  width: 48px;
                  height: 48px;
                  margin-right: 16px;
                "
              >
                <img
                  src="images/hearts 1.png"
                  alt="Fun Learning Icon"
                  style="width: 24px; height: 24px"
                />
              </div>
              <div>
                <h4
                  style="
                    margin: 0;
                    font-size: 16px;
                    font-weight: 600;
                    color: #000;
                  "
                >
                  Easily Accessible
                </h4>
                <p style="margin: 4px 0 0; font-size: 14px; color: #777">
                  Learning Will fell Very Comfortable With Courslab.
                </p>
              </div>
            </div>

            <div
              style="display: flex; align-items: center; margin-bottom: 20px"
            >
              <div
                style="
                  background-color: #4d2c5e;
                  padding: 10px;
                  border-radius: 10px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  width: 48px;
                  height: 48px;
                  margin-right: 16px;
                "
              >
                <img
                  src="images/jigsaw 1.png"
                  alt="Fun Learning Icon"
                  style="width: 24px; height: 24px"
                />
              </div>
              <div>
                <h4
                  style="
                    margin: 0;
                    font-size: 16px;
                    font-weight: 600;
                    color: #000;
                  "
                >
                  Fun learning expe
                </h4>
                <p style="margin: 4px 0 0; font-size: 14px; color: #777">
                  Learning Will fell Very Comfortable With Courslab.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section style="padding: 60px 20px; background: #fff">
      <div style="max-width: 1200px; margin: auto; text-align: center">
        <h2
          style="
            font-size: 28px;
            font-weight: 700;
            color: #1b1c57;
            margin-bottom: 10px;
          "
        >
          What Student’s Say
        </h2>
        <p style="color: #8b8b8b; font-size: 14px">
          Lorem Ipsum is simply dummy text of the printing.
        </p>

        <div
          style="
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap;
          "
        >
          <div
            style="
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              padding: 20px;
              width: 300px;
              border-radius: 10px;
              text-align: left;
            "
          >
            <p style="font-style: italic; color: #555">
              “Teachings of the great explore of truth, the master-builder of
              human happiness...”
            </p>
            <div style="display: flex; align-items: center; margin-top: 15px">
              <img
                src="images/Ellipse 34.png"
                style="
                  border-radius: 50%;
                  width: 40px;
                  height: 40px;
                  margin-right: 10px;
                "
              />
              <div>
                <div style="font-weight: 600">Finlay Kirk</div>
                <div style="font-size: 12px; color: gray">Web Developer</div>
              </div>
            </div>
          </div>
          <div
            style="
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              padding: 20px;
              width: 300px;
              border-radius: 10px;
              text-align: left;
            "
          >
            <p style="font-style: italic; color: #555">
              “Complete account of the system and expound the actual...”
            </p>
            <div style="display: flex; align-items: center; margin-top: 15px">
              <img
                src="images/Ellipse 34 (1).png"
                style="
                  border-radius: 50%;
                  width: 40px;
                  height: 40px;
                  margin-right: 10px;
                "
              />
              <div>
                <div style="font-weight: 600">Dannette P. Cervantes</div>
                <div style="font-size: 12px; color: gray">Web Design</div>
              </div>
            </div>
          </div>
          <div
            style="
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              padding: 20px;
              width: 300px;
              border-radius: 10px;
              text-align: left;
            "
          >
            <p style="font-style: italic; color: #555">
              “There are many variations of passages of Lorem Ipsum...”
            </p>
            <div style="display: flex; align-items: center; margin-top: 15px">
              <img
                src="images/Ellipse 34 (2).png"
                style="
                  border-radius: 50%;
                  width: 40px;
                  height: 40px;
                  margin-right: 10px;
                "
              />
              <div>
                <div style="font-weight: 600">Clara R. Altman</div>
                <div style="font-size: 12px; color: gray">UI/UX Design</div>
              </div>
            </div>
          </div>
        </div>

        <div style="margin-top: 30px">
          <span
            style="
              height: 10px;
              width: 10px;
              background-color: #5e3bee;
              border-radius: 50%;
              display: inline-block;
              margin: 0 4px;
            "
          ></span>
          <span
            style="
              height: 10px;
              width: 10px;
              background-color: #ddd;
              border-radius: 50%;
              display: inline-block;
              margin: 0 4px;
            "
          ></span>
          <span
            style="
              height: 10px;
              width: 10px;
              background-color: #ddd;
              border-radius: 50%;
              display: inline-block;
              margin: 0 4px;
            "
          ></span>
        </div>
      </div>
    </section>

    <section style="padding: 60px 20px; background: #fff">
      <div style="max-width: 1200px; margin: auto; text-align: center">
        <h2 style="font-size: 28px; font-weight: 700; color: #1b1c57">
          Our Tracks
        </h2>
        <p style="color: #8b8b8b; font-size: 14px">
          Lorem Ipsum is simply dummy text of the printing.
        </p>

        <div
          style="
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
          "
        >
          <div
            style="
              width: 300px;
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              border-radius: 15px;
              overflow: hidden;
            "
          >
            <img
              src="images/elegant-young-teacher-with-brunette-hair-stylish-light-shirt-black-striped-suit-glasses-holding-writings-pen-giving-lecture 1.png"
              style="width: 100%; height: 200px; object-fit: cover"
            />
            <div style="padding: 20px; text-align: left">
              <div style="font-weight: 600">Matthew E. McNatt</div>
              <div style="font-size: 13px; color: gray">
                Professor @George Brown College
              </div>
              <p style="font-size: 13px; color: #888; margin: 10px 0">
                Ut enim ad minim veniam, quis nost exercitation ullamco laboris
                nisi ut aliquip ex commodo.
              </p>
              <div style="color: #ff6a00; font-weight: 600; font-size: 13px">
                Engineering physics
              </div>
              <div style="margin-top: 10px">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/174/174855.png"
                  style="width: 18px; margin-right: 10px"
                />
                <img
                  src="https://cdn-icons-png.flaticon.com/512/145/145807.png"
                  style="width: 18px"
                />
              </div>
            </div>
          </div>

          <div
            style="
              width: 300px;
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              border-radius: 15px;
              overflow: hidden;
            "
          >
            <img
              src="images/portrait-female-teacher-white 1.png"
              style="width: 100%; height: 200px; object-fit: cover"
            />
            <div style="padding: 20px; text-align: left">
              <div style="font-weight: 600">Tracy D. Wright</div>
              <div style="font-size: 13px; color: gray">
                Professor @George Brown College
              </div>
              <p style="font-size: 13px; color: #888; margin: 10px 0">
                Ut enim ad minim veniam, quis nost exercitation ullamco laboris
                nisi ut aliquip ex commodo.
              </p>
              <div style="color: #ff6a00; font-weight: 600; font-size: 13px">
                Engineering physics
              </div>
              <div style="margin-top: 10px">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/174/174855.png"
                  style="width: 18px; margin-right: 10px"
                />
                <img
                  src="https://cdn-icons-png.flaticon.com/512/145/145807.png"
                  style="width: 18px"
                />
              </div>
            </div>
          </div>

          <div
            style="
              width: 300px;
              background: #fff;
              box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.05);
              border-radius: 15px;
              overflow: hidden;
            "
          >
            <img
              src="images/teacher.png"
              style="width: 100%; height: 200px; object-fit: cover"
            />
            <div style="padding: 20px; text-align: left">
              <div style="font-weight: 600">Cynthia A. Nelson</div>
              <div style="font-size: 13px; color: gray">
                Professor @George Brown College
              </div>
              <p style="font-size: 13px; color: #888; margin: 10px 0">
                Ut enim ad minim veniam, quis nost exercitation ullamco laboris
                nisi ut aliquip ex commodo.
              </p>
              <div style="color: #ff6a00; font-weight: 600; font-size: 13px">
                Engineering physics
              </div>
              <div style="margin-top: 10px">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/174/174855.png"
                  style="width: 18px; margin-right: 10px"
                />
                <img
                  src="https://cdn-icons-png.flaticon.com/512/145/145807.png"
                  style="width: 18px"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section
      style="
        padding: 60px 20px;
        background: linear-gradient(135deg, #4b286d, #5c2e77);
        border-radius: 12px;
        max-width: 960px;
        margin: 60px auto;
        position: relative;
        font-family: 'Arial', sans-serif;
        overflow: hidden;
      "
    >
      <div style="position: absolute; top: -60px; left: -40px">
        <svg width="180" height="180" viewBox="0 0 200 200">
          <circle
            cx="100"
            cy="100"
            r="80"
            fill="none"
            stroke="#ffffff88"
            stroke-width="2"
          />
          <circle
            cx="120"
            cy="100"
            r="50"
            fill="none"
            stroke="#ffffff88"
            stroke-width="2"
          />
        </svg>
      </div>

      <div style="position: absolute; top: -60px; right: -40px">
        <svg width="180" height="180" viewBox="0 0 200 200">
          <circle
            cx="100"
            cy="100"
            r="80"
            fill="none"
            stroke="#ffffff88"
            stroke-width="2"
          />
          <circle
            cx="120"
            cy="100"
            r="50"
            fill="none"
            stroke="#ffffff88"
            stroke-width="2"
          />
        </svg>
      </div>

      <div style="max-width: 700px; margin: auto; text-align: center">
        <h2
          style="
            font-size: 24px;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
          "
        >
          Subscribe to our newsletter
        </h2>
        <p style="font-size: 14px; color: #d4d4d4; margin-bottom: 30px">
          Lorem Ipsum is simply dummy text of the printing.
        </p>

        <div
          style="
            background-color: white;
            border-radius: 30px;
            display: flex;
            overflow: hidden;
            max-width: 420px;
            margin: 0 auto;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
          "
        >
          <input
            type="email"
            placeholder="Email Address"
            required
            style="
              padding: 15px 20px;
              border: none;
              outline: none;
              font-size: 14px;
              flex: 1;
              border-radius: 30px 0 0 30px;
            "
          />
          <button
            type="submit"
            style="
              padding: 0 30px;
              background-color: #ff6a00;
              color: white;
              font-weight: 600;
              font-size: 14px;
              border: none;
              cursor: pointer;
              border-radius: 0 30px 30px 0;
            "
          >
            Send
          </button>
        </div>
      </div>

      <img
        src="images/arraow.png"
        alt="arrow"
        style="position: absolute; bottom: 30px; left: 30px; width: 70px"
      />

      <img
        src="images/casual-life-3d-idea-lamp 2.png"
        alt="bulb"
        style="position: absolute; bottom: 30px; right: 40px; width: 60px"
      />
    </section>

    <footer
      style="
        padding: 40px 20px;
        background: #fff7f0;
        font-family: Arial, sans-serif;
        font-size: 14px;
        color: #4d4d4d;
      "
    >
      <div
        style="
          max-width: 1200px;
          margin: auto;
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
          gap: 40px;
        "
      >
        <div style="flex: 1; min-width: 200px">
          <div style="display: flex; align-items: center; gap: 10px">
            <img
              src="images/Group 328.png"
              alt="Book Store Logo"
              style="height: 40px"
            />
            <h3 style="font-weight: bold; color: #000; margin: 0">
              Book Store
            </h3>
          </div>

          <p style="margin-top: 10px; line-height: 1.6">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy a type
            specimen book.
          </p>
        </div>

        <div style="flex: 1; min-width: 150px; margin-top: 10px">
          <h4 style="font-weight: bold; color: #000">Company</h4>
          <ul style="list-style: none; padding: 0; line-height: 2">
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >About Us</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >How to work?</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Populer Course</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Service</a
              >
            </li>
          </ul>
        </div>

        <div style="flex: 1; min-width: 150px; margin-top: 10px">
          <h4 style="font-weight: bold; color: #000">Courses</h4>
          <ul style="list-style: none; padding: 0; line-height: 2">
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Categories</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Ofline Course</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Vidio Course</a
              >
            </li>
          </ul>
        </div>

        <div style="flex: 1; min-width: 150px; margin-top: 10px">
          <h4 style="font-weight: bold; color: #000">Support</h4>
          <ul style="list-style: none; padding: 0; line-height: 2">
            <li>
              <a href="#" style="text-decoration: none; color: inherit">FAQ</a>
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Help Center</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Career</a
              >
            </li>
            <li>
              <a href="#" style="text-decoration: none; color: inherit"
                >Privacy</a
              >
            </li>
          </ul>
        </div>

        <div style="flex: 1; min-width: 200px; margin-top: 10px">
          <h4 style="font-weight: bold; color: #000">Contac Info</h4>
          <ul style="list-style: none; padding: 0; line-height: 1.8">
            <li>+0913-705-3875</li>
            <li>Elizabeth.j@jourrapide.com</li>
            <li>4808 Skinner Hollow Road<br />Days Creek, OR 97429</li>
          </ul>
        </div>
      </div>

      <hr
        style="
          border: none;
          border-top: 1px solid #b7b7b7;
          width: 100%;
          margin: 40px 0 20px 0;
        "
      />

      <div style="text-align: center; color: #777">
        BookStore All Right Reserved, 2022
      </div>
    </footer>

    <script src="js/main.js"></script>
  </body>
</html>
