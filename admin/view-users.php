<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Registered Users</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
      :root {
        --primary: #4b2563;
        --accent: #ff7f32;
        --bg: #fdf6ef;
        --text: #222;
        --muted: #888;
        --radius: 1.5rem;
        --white: #fff;
      }

      body {
        background-color: var(--bg);
      }

      .page-header {
        background: var(--white);
        padding: 20px;
        border-radius: var(--radius);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
      }

      .users-table {
        background: var(--white);
        border-radius: var(--radius);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 20px;
        overflow-x: auto;
      }

      .table th {
        background-color: var(--bg);
        color: var(--text);
        border-bottom: 2px solid var(--primary);
        font-weight: 600;
        white-space: nowrap;
      }

      .table td {
        vertical-align: middle;
      }

      .user-status {
        padding: 5px 10px;
        border-radius: var(--radius);
        font-size: 0.875rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
      }

      .status-active {
        background-color: #e8f5e9;
        color: #2e7d32;
      }

      .status-inactive {
        background-color: #ffebee;
        color: #c62828;
      }

      .action-buttons {
        display: flex;
        gap: 8px;
      }

      .action-buttons .btn {
        padding: 8px 12px;
        border-radius: var(--radius);
        transition: all 0.3s ease;
      }

      .btn-view {
        background-color: var(--primary);
        color: var(--white);
      }

      .btn-view:hover {
        background-color: #3a1d4d;
        color: var(--white);
      }

      .btn-delete {
        background-color: #dc3545;
        color: var(--white);
      }

      .btn-delete:hover {
        background-color: #bb2d3b;
        color: var(--white);
      }

      .btn-certificate {
        background-color: var(--accent);
        color: var(--white);
      }

      .btn-certificate:hover {
        background-color: #e6732b;
        color: var(--white);
      }

      .search-box {
        position: relative;
        max-width: 300px;
      }

      .search-box input {
        padding-left: 40px;
        border-radius: var(--radius);
        border: 1px solid #ddd;
        transition: all 0.3s ease;
      }

      .search-box input:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(75, 37, 99, 0.25);
      }

      .search-box i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--muted);
      }

      .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: var(--primary);
        color: var(--white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 1.1rem;
      }

      .enrolled-courses {
        max-width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .enrolled-courses:hover {
        white-space: normal;
        overflow: visible;
        position: relative;
        z-index: 1;
        background: var(--white);
        padding: 5px;
        border-radius: var(--radius);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      @media (max-width: 768px) {
        .page-header {
          flex-direction: column;
          gap: 15px;
        }

        .search-box {
          max-width: 100%;
          width: 100%;
        }

        .users-table {
          padding: 10px;
        }

        .table {
          font-size: 0.9rem;
        }

        .action-buttons {
          flex-direction: column;
        }

        .action-buttons .btn {
          width: 100%;
        }

        .enrolled-courses {
          max-width: 150px;
        }
      }

      .loading-spinner {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000;
      }

      .loading-spinner.active {
        display: block;
      }

      .filter-dropdown {
        position: relative;
      }

      .filter-dropdown select {
        padding: 8px 35px 8px 15px;
        border-radius: var(--radius);
        border: 1px solid #ddd;
        appearance: none;
        background: var(--white)
          url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%234b2563' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E")
          no-repeat right 15px center;
        cursor: pointer;
        transition: all 0.3s ease;
      }

      .filter-dropdown select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(75, 37, 99, 0.25);
        outline: none;
      }
    </style>
  </head>
  <body>
    <div class="loading-spinner">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <div class="main-content-wrapper">
      <div
        class="page-header d-flex justify-content-between align-items-center"
      >
        <h2 class="mb-0">Registered Users</h2>
        <div class="d-flex gap-3 align-items-center">
          <div class="search-box">
            <i class="fas fa-search"></i>
            <input
              type="text"
              class="form-control"
              placeholder="Search users..."
            />
          </div>
          <div class="filter-dropdown">
            <select class="form-select" id="statusFilter">
              <option value="all">All Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>
        </div>
      </div>

      <div class="users-table">
        <table class="table">
          <thead>
            <tr>
              <th>User</th>
              <th>Email</th>
              <th>Enrolled Courses</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="user-avatar">JD</div>
                  <div>
                    <div class="fw-bold">John Doe</div>
                    <small class="text-muted">#001</small>
                  </div>
                </div>
              </td>
              <td>john@example.com</td>
              <td class="enrolled-courses">
                Web Development, Python Basics, Data Structures
              </td>
              <td>
                <span class="user-status status-active">
                  <i class="fas fa-circle"></i>
                  Active
                </span>
              </td>
              <td class="action-buttons">
                <button class="btn btn-view btn-sm">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-delete btn-sm">
                  <i class="fas fa-trash"></i>
                </button>
                <button class="btn btn-certificate btn-sm">
                  <i class="fas fa-certificate"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <script>
      document
        .querySelector(".search-box input")
        .addEventListener("input", function (e) {
          const searchTerm = e.target.value.toLowerCase();
          const tableRows = document.querySelectorAll("tbody tr");

          tableRows.forEach((row) => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? "" : "none";
          });
        });

      document
        .getElementById("statusFilter")
        .addEventListener("change", function (e) {
          const status = e.target.value;
          const tableRows = document.querySelectorAll("tbody tr");

          tableRows.forEach((row) => {
            if (status === "all") {
              row.style.display = "";
            } else {
              const userStatus = row
                .querySelector(".user-status")
                .classList.contains(`status-${status}`);
              row.style.display = userStatus ? "" : "none";
            }
          });
        });

      document.querySelectorAll(".btn-delete").forEach((btn) => {
        btn.addEventListener("click", function () {
          if (confirm("Are you sure you want to delete this user?")) {
            const spinner = document.querySelector(".loading-spinner");
            spinner.classList.add("active");

            setTimeout(() => {
              this.closest("tr").remove();
              spinner.classList.remove("active");
              alert("User deleted successfully!");
            }, 1000);
          }
        });
      });

      document.querySelectorAll(".btn-certificate").forEach((btn) => {
        btn.addEventListener("click", function () {
          const row = this.closest("tr");
          const name = row.querySelector(".fw-bold").innerText;
          const courses = row.querySelector(".enrolled-courses").innerText;

          const spinner = document.querySelector(".loading-spinner");
          spinner.classList.add("active");

          setTimeout(() => {
            spinner.classList.remove("active");

            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            doc.setFontSize(22);
            doc.text("Certificate of Completion", 105, 40, null, null, "center");

            doc.setFontSize(16);
            doc.text(`This certifies that`, 105, 60, null, null, "center");

            doc.setFontSize(20);
            doc.setTextColor(75, 37, 99);
            doc.text(name, 105, 75, null, null, "center");

            doc.setFontSize(16);
            doc.setTextColor(0, 0, 0);
            doc.text(`has successfully completed the following courses:`, 105, 90, null, null, "center");

            const formattedCourses = courses
              .split(',')
              .map((c) => `• ${c.trim()}`)
              .join('\n');

            doc.setFontSize(12);
            doc.text(formattedCourses, 105, 110, null, null, "center");

            doc.setFontSize(10);
            doc.text(`Issued on: ${new Date().toLocaleDateString()}`, 105, 150, null, null, "center");

            doc.save(`${name.replace(/\s+/g, "_")}_Certificate.pdf`);
          }, 1000);
        });
      });
    </script>
  </body>
</html>
