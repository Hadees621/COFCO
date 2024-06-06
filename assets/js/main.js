document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".navbar-tab");
  const dropdownMenus = document.querySelectorAll(".dropdown-menu");

  menuButton.addEventListener("click", function () {
    dropdownMenus.forEach((menu) => menu.classList.toggle("active"));
  });
});
