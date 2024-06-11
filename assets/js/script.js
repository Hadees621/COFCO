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
