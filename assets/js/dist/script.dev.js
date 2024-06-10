"use strict";

// Menu button script
document.addEventListener("DOMContentLoaded", function () {
  var menuButton = document.querySelector(".navbar-tab");
  var dropdownMenus = document.querySelectorAll(".dropdown-menu");
  menuButton.addEventListener("click", function () {
    dropdownMenus.forEach(function (menu) {
      return menu.classList.toggle("active");
    });
  });
}); // Slider script

var currentSlide = 0;

function moveSlide(direction) {
  var slides = document.querySelectorAll(".slide");
  var totalSlides = slides.length;
  var sliderWrapper = document.querySelector(".slider-wrapper");
  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = totalSlides - 1;
  } else if (currentSlide >= totalSlides) {
    currentSlide = 0;
  }

  var offset = -currentSlide * 100 / 3;
  sliderWrapper.style.transform = "translateX(".concat(offset, "%)");
} // Counter script


document.addEventListener("DOMContentLoaded", function () {
  var counterValue = document.getElementById("counter-value");
  var incrementButton = document.getElementById("increment");
  var decrementButton = document.getElementById("decrement");
  var count = 0;
  incrementButton.addEventListener("click", function () {
    count++;
    counterValue.textContent = count;
  });
  decrementButton.addEventListener("click", function () {
    if (count > 0) {
      count--;
      counterValue.textContent = count;
    }
  });
});