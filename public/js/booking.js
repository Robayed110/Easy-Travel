const selectedSeats = [];

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
  const selectedSeatsList = document.getElementById('selected-seats-input');
  selectedSeatsList.value = selectedSeats.join(',');
}
