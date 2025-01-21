
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
      <form id="reservation-form" method="POST" action="{{url('/reservations')}}">
      @csrf
        <label for="date">Select Date</label>
         <input type="date" id="date" name="date" required>
          @if ($errors->has('date'))
          <small class="text-danger" style="color:red">{{ $errors->first('date') }}</small>
          @endif

        <label for="time">Select Time</label>
        <input type="time" id="time" name="time" required>
        @if ($errors->has('time'))
          <small class="text-danger" style="color:red">{{ $errors->first('time') }}</small>
          @endif

        <label for="guests">Number of Guests</label>
        <input type="number" id="guests" name="guest" placeholder="Enter number of guests" required>
        @if ($errors->has('guest'))
          <small class="text-danger" style="color:red">{{ $errors->first('guest') }}</small>
          @endif

        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        @if ($errors->has('name'))
          <small class="text-danger" style="color:red">{{ $errors->first('name') }}</small>
          @endif

        <label for="contact">Contact Information</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        @if ($errors->has('phone'))
          <small class="text-danger" style="color:red">{{ $errors->first('phone') }}</small>
          @endif

        <button type="submit" class="btn">Book Now</button>
      </form>
      @if (session('success'))
        <div class="alert alert-success mt-3" style="color:green">
            {{ session('success') }}
        </div>
      @endif
      <p>For urgent bookings, call us at 1234567890</p>
    </div>
  </section>
</main>
@endsection