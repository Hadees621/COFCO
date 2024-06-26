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

function cloneSlides() {
  var slides = document.querySelectorAll(".slide");
  var sliderWrapper = document.querySelector(".slider-wrapper");
  slides.forEach(function (slide) {
    var cloneFirst = slide.cloneNode(true);
    var cloneLast = slide.cloneNode(true);
    sliderWrapper.appendChild(cloneFirst);
    sliderWrapper.insertBefore(cloneLast, sliderWrapper.firstChild);
  });
}

function moveSlide(direction) {
  var slides = document.querySelectorAll(".slide");
  var totalSlides = slides.length / 3;
  var sliderWrapper = document.querySelector(".slider-wrapper");
  var screenWidth = window.innerWidth;
  var slidesVisible, offsetValue;

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

    var _offset = -currentSlide * offsetValue / slidesVisible;

    sliderWrapper.style.transform = "translateX(".concat(_offset, "%)");
    setTimeout(function () {
      sliderWrapper.style.transition = "transform 0.5s ease";
      currentSlide = totalSlides - slidesVisible * 2;
      var offset = -currentSlide * offsetValue / slidesVisible;
      sliderWrapper.style.transform = "translateX(".concat(offset, "%)");
    }, 0);
    return;
  } else if (currentSlide >= totalSlides * 2) {
    currentSlide = totalSlides;
    sliderWrapper.style.transition = "none";

    var _offset2 = -currentSlide * offsetValue / slidesVisible;

    sliderWrapper.style.transform = "translateX(".concat(_offset2, "%)");
    setTimeout(function () {
      sliderWrapper.style.transition = "transform 0.5s ease";
      currentSlide = 0;
      var offset = -currentSlide * offsetValue / slidesVisible;
      sliderWrapper.style.transform = "translateX(".concat(offset, "%)");
    }, 0);
    return;
  }

  var offset = -currentSlide * offsetValue / slidesVisible;
  sliderWrapper.style.transform = "translateX(".concat(offset, "%)");
}

cloneSlides();
window.addEventListener("resize", function () {
  moveSlide(0);
});
cloneSlides();
window.addEventListener("resize", function () {
  moveSlide(0);
});
cloneSlides();
window.addEventListener("resize", function () {
  moveSlide(0);
});
window.addEventListener("resize", function () {
  moveSlide(0);
}); // Slider script ends
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
}); // JavaScript to handle month navigation and week selection

var monthDisplay = document.getElementById("monthDisplay");
var weekSelector = document.getElementById("weekSelector");
var currentMonthIndex = 0;
var months = ["January 2024", "February 2024", "March 2024", "April 2024", "May 2024", "June 2024", "July 2024", "August 2024", "September 2024", "October 2024", "November 2024", "December 2024"];
var weeks = ["Monday 1 to Saturday 6", "Monday 7 to Saturday 13", "Monday 14 to Saturday 20", "Monday 21 to Saturday 27"];

function updateMonthDisplay() {
  monthDisplay.textContent = months[currentMonthIndex];
  updateWeekOptions();
}

function updateWeekOptions() {
  weekSelector.innerHTML = "";
  weeks.forEach(function (week) {
    var weekButton = document.createElement("button");
    weekButton.className = "week-option";
    weekButton.textContent = week;
    weekSelector.appendChild(weekButton);
  });
}

document.getElementById("prevMonth").addEventListener("click", function () {
  if (currentMonthIndex > 0) {
    currentMonthIndex--;
    updateMonthDisplay();
  }
});
document.getElementById("nextMonth").addEventListener("click", function () {
  if (currentMonthIndex < months.length - 1) {
    currentMonthIndex++;
    updateMonthDisplay();
  }
});
updateMonthDisplay();