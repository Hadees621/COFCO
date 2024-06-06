"use strict";

document.addEventListener("DOMContentLoaded", function () {
  var menuButton = document.querySelector(".navbar-tab");
  var dropdownMenus = document.querySelectorAll(".dropdown-menu");
  menuButton.addEventListener("click", function () {
    dropdownMenus.forEach(function (menu) {
      return menu.classList.toggle("active");
    });
  });
});