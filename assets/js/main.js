document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".menu-button");
  const closeButton = document.querySelector(".close-button");
  const sidebar = document.getElementById("sidebar");
  const dropdownHeaders = document.querySelectorAll(".dropdown-header");

  menuButton.addEventListener("click", function () {
    sidebar.classList.add("active");
  });

  closeButton.addEventListener("click", function () {
    sidebar.classList.remove("active");
  });

  dropdownHeaders.forEach((header) => {
    header.addEventListener("click", function () {
      this.nextElementSibling.classList.toggle("active");
    });
  });
});
