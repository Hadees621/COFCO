"use strict";

// Counter Modal
document.querySelectorAll('.green-modal-buttons').forEach(function (button) {
  button.addEventListener('click', function () {
    // Remove the 'selected' class from all buttons
    document.querySelectorAll('.green-modal-buttons').forEach(function (btn) {
      return btn.classList.remove('selected');
    }); // Add the 'selected' class to the clicked button

    this.classList.add('selected');
  });
});