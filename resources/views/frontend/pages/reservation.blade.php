
  @extends('frontend.layouts.app')
@section('meta_title', '')
@section('meta_description','')

@section('content')
  <main>
  <!-- Reservation Bannner Section -->
  <section class="reservation-banner">
    <!-- Reservation Image -->
    <div class="reservation-image">
      <img src="images/reserve.jpg" alt="Reservation Banner">
    </div>
    </section>

  <!-- Reservation Form Section -->
  <section class="reservation">
    <div class="reservation-form-container">
      <h1>Book Your Table</h1>
      <form id="reservation-form">
        <label for="date">Select Date</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Select Time</label>
        <input type="time" id="time" name="time" required>

        <label for="guests">Number of Guests</label>
        <input type="number" id="guests" name="guests" placeholder="Enter number of guests" required>

        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="contact">Contact Information</label>
        <input type="tel" id="contact" name="contact" placeholder="Enter your phone number" required>

        <button type="submit" class="btn">Book Now</button>
      </form>
      <p>For urgent bookings, call us at 1234567890</p>
    </div>
  </section>
</main>
@endsection