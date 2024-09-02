// Counter Modal

document.querySelectorAll('.green-modal-buttons').forEach(button => {
    button.addEventListener('click', function () {
        // Remove the 'selected' class from all buttons
        document.querySelectorAll('.green-modal-buttons').forEach(btn => btn.classList.remove('selected'));
        // Add the 'selected' class to the clicked button
        this.classList.add('selected');
    });
});