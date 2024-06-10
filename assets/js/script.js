// Menu button script
document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".navbar-tab");
  const dropdownMenus = document.querySelectorAll(".dropdown-menu");

  menuButton.addEventListener("click", function () {
    dropdownMenus.forEach((menu) => menu.classList.toggle("active"));
  });
});

// Slider script
let currentSlide = 0;

function moveSlide(direction) {
  const slides = document.querySelectorAll(".slide");
  const totalSlides = slides.length;
  const sliderWrapper = document.querySelector(".slider-wrapper");

  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = totalSlides - 1;
  } else if (currentSlide >= totalSlides) {
    currentSlide = 0;
  }

  const offset = (-currentSlide * 100) / 3;
  sliderWrapper.style.transform = `translateX(${offset}%)`;
}

// Counter script
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
