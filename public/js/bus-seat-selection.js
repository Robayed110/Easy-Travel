// Get all seat elements
const seats = document.querySelectorAll('.seat');

// Array to store selected seat numbers
const selectedSeats = [];

// Function to handle seat selection
function handleSeatSelection() {
    // Toggle 'selected' class on the clicked seat
    this.classList.toggle('selected');
  
    // Get the seat number
    const seatNumber = this.textContent;
  
    // Add or remove seat from selectedSeats array
    if (selectedSeats.includes(seatNumber)) {
      selectedSeats.splice(selectedSeats.indexOf(seatNumber), 1);
    } else {
      selectedSeats.push(seatNumber);
    }
  
    // Update selected seats list
    updateSelectedSeatsList();
  }
  
  function updateSelectedSeatsList() {
    const selectedSeatsList = document.getElementById('selected-seats');
    selectedSeatsList.textContent = selectedSeats.join(', ');
  }
  
// Add event listener to each seat element
seats.forEach(seat => {
  seat.addEventListener('click', handleSeatSelection);
});
