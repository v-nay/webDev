// Reservation Form Validation
document.addEventListener('DOMContentLoaded', function () {
  const reservationForm = document.getElementById('reservation-form');

  if (reservationForm) {
    reservationForm.addEventListener('submit', function (e) {
      const date = document.getElementById('date').value;
      const time = document.getElementById('time').value;
      const guests = document.getElementById('guests').value;
      const name = document.getElementById('name').value;
      const contact = document.getElementById('contact').value;

      // Check if all fields are filled
      if (!date || !time || !guests || !name || !contact) {
        alert('Please fill out all fields!');
        e.preventDefault(); // Prevent form submission
        return;
      }

      // Validate guests count (e.g., must be 1 or more)
      if (parseInt(guests) <= 0) {
        alert('Please enter a valid number of guests.');
        e.preventDefault();
        return;
      }

      // Validate contact number (10-digit format)
      if (!/^[0-9]{10}$/.test(contact)) {
        alert('Please enter a valid 10-digit contact number.');
        e.preventDefault();
        return;
      }

      // If everything is valid
      alert(`Reservation confirmed for ${name} on ${date} at ${time}.`);
    });
  }
});