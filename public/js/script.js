// script.js

// Get references to the button and popup form container
const scheduleButton = document.getElementById('scheduleButton');
const popupFormContainer = document.getElementById('popupFormContainer');

// Add click event listener to the button
scheduleButton.addEventListener('click', () => {
  // Show the popup form container
  popupFormContainer.style.display = 'block';
});
