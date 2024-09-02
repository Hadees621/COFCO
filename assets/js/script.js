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

function cloneSlides() {
  const slides = document.querySelectorAll(".slide");
  const sliderWrapper = document.querySelector(".slider-wrapper");

  slides.forEach((slide) => {
    const cloneFirst = slide.cloneNode(true);
    const cloneLast = slide.cloneNode(true);
    sliderWrapper.appendChild(cloneFirst);
    sliderWrapper.insertBefore(cloneLast, sliderWrapper.firstChild);
  });
}

function moveSlide(direction) {
  const slides = document.querySelectorAll(".slide");
  const totalSlides = slides.length / 3;
  const sliderWrapper = document.querySelector(".slider-wrapper");

  const screenWidth = window.innerWidth;
  let slidesVisible, offsetValue;

  if (screenWidth >= 312 && screenWidth <= 768) {
    slidesVisible = 1;
    offsetValue = 33.33;
  } else if (screenWidth >= 769 && screenWidth <= 1023) {
    slidesVisible = 1;
    offsetValue = 33.33;
  } else if (screenWidth >= 1024 && screenWidth <= 1439) {
    slidesVisible = 3;
    offsetValue = 100;
  } else if (screenWidth >= 1440 && screenWidth <= 1599) {
    slidesVisible = 3;
    offsetValue = 100;
  } else if (screenWidth >= 1600 && screenWidth <= 2560) {
    slidesVisible = 3;
    offsetValue = 100;
  } else {
    slidesVisible = 3;
    offsetValue = 33.33;
  }

  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = totalSlides - slidesVisible;
    sliderWrapper.style.transition = "none";
    const offset = (-currentSlide * offsetValue) / slidesVisible;
    sliderWrapper.style.transform = `translateX(${offset}%)`;
    setTimeout(() => {
      sliderWrapper.style.transition = "transform 0.5s ease";
      currentSlide = totalSlides - slidesVisible * 2;
      const offset = (-currentSlide * offsetValue) / slidesVisible;
      sliderWrapper.style.transform = `translateX(${offset}%)`;
    }, 0);
    return;
  } else if (currentSlide >= totalSlides * 2) {
    currentSlide = totalSlides;
    sliderWrapper.style.transition = "none";
    const offset = (-currentSlide * offsetValue) / slidesVisible;
    sliderWrapper.style.transform = `translateX(${offset}%)`;
    setTimeout(() => {
      sliderWrapper.style.transition = "transform 0.5s ease";
      currentSlide = 0;
      const offset = (-currentSlide * offsetValue) / slidesVisible;
      sliderWrapper.style.transform = `translateX(${offset}%)`;
    }, 0);
    return;
  }

  const offset = (-currentSlide * offsetValue) / slidesVisible;
  sliderWrapper.style.transform = `translateX(${offset}%)`;
}

cloneSlides();

window.addEventListener("resize", () => {
  moveSlide(0);
});

cloneSlides();

window.addEventListener("resize", () => {
  moveSlide(0);
});

cloneSlides();

window.addEventListener("resize", () => {
  moveSlide(0);
});

window.addEventListener("resize", () => {
  moveSlide(0);
});

// Slider script ends

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

// JavaScript to handle month navigation and week selection
const monthDisplay = document.getElementById("monthDisplay");
const weekSelector = document.getElementById("weekSelector");

let currentMonthIndex = 0;

const months = [
  "January 2024",
  "February 2024",
  "March 2024",
  "April 2024",
  "May 2024",
  "June 2024",
  "July 2024",
  "August 2024",
  "September 2024",
  "October 2024",
  "November 2024",
  "December 2024",
];

const weeks = [
  "Monday 1 to Saturday 6",
  "Monday 7 to Saturday 13",
  "Monday 14 to Saturday 20",
  "Monday 21 to Saturday 27",
];

function updateMonthDisplay() {
  monthDisplay.textContent = months[currentMonthIndex];
  updateWeekOptions();
}

function updateWeekOptions() {
  weekSelector.innerHTML = "";
  weeks.forEach((week) => {
    const weekButton = document.createElement("button");
    weekButton.className = "week-option";
    weekButton.textContent = week;
    weekSelector.appendChild(weekButton);
  });
}

document.getElementById("prevMonth").addEventListener("click", () => {
  if (currentMonthIndex > 0) {
    currentMonthIndex--;
    updateMonthDisplay();
  }
});

document.getElementById("nextMonth").addEventListener("click", () => {
  if (currentMonthIndex < months.length - 1) {
    currentMonthIndex++;
    updateMonthDisplay();
  }
});

updateMonthDisplay();


