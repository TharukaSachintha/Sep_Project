window.addEventListener("DOMContentLoaded", function () {
  const navbarDiv = document.getElementById("navbar");
  if (navbarDiv) {
    fetch("nav.html")
      .then((res) => res.text())
      .then((data) => {
        navbarDiv.innerHTML = data;
        setupHamburger();
      });
  }
});

function setupHamburger() {
  const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });
  }
}
