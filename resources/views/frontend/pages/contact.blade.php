@extends('frontend.layouts.app')
 @section('meta_title', '')
@section('meta_description','')
 @section('content')

<main>
  <!-- Contact Section -->
  <section class="contact-section">
    <h1>Contact Us</h1>
    <p>
      Contact us for booking, questions or feedback. We are here to make your
      stay a pleasure! Fill out the form below, or contact us directly.
    </p>

    <div class="contact-container">
      <!-- Form Section -->
      <section class="contact-form">
        <h2>Get In Touch</h2>
        <form id="contact-form" method="POST" action="{{url('/contacts')}}">
          @csrf
          <label for="name">Name</label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter your name"
            value="{{ old('name') }}" 
          />
          @if ($errors->has('name'))
        <small class="text-danger" style="color:red">{{ $errors->first('name') }}</small>
    @endif

          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            value="{{ old('email') }}" 
          />
          @if ($errors->has('email'))
        <small class="text-danger" style="color:red">{{ $errors->first('email') }}</small>
    @endif

          <label for="phone">Phone</label>
          <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="Enter your phone number"
            value="{{ old('phone') }}" 
          />
          @if ($errors->has('phone'))
        <small class="text-danger" style="color:red">{{ $errors->first('phone') }}</small>
    @endif

          <label for="message">Message</label>
          <textarea
            id="message"
            name="message"
            placeholder="Your message..."
            value="{{ old('message') }}" 
          ></textarea>
          @if ($errors->has('message'))
        <small class="text-danger" style="color:red">{{ $errors->first('message') }}</small>
    @endif

          <button type="submit" class="btn">Send Message</button>
        </form>
        @if (session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
      </section>

      <!-- Map Section -->
      <aside class="contact-map">
        <h2>Find Us on the Map</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.7248327989146!2d151.20352387720737!3d-33.87098171917458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae3c8e58292f%3A0xc45a57353eb1a64e!2sKing&#39;s%20Own%20Institute!5e0!3m2!1sen!2sau!4v1735095565980!5m2!1sen!2sau"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        >
        </iframe>
      </aside>
    </div>

    <!-- Other Contact Information -->
    <section class="other-contact">
      <h3>Other Ways to Reach Us</h3>
      <p>Phone: <a href="tel:1234567890">1234567890</a></p>
      <p>
        Email:
        <a href="mailto:info@gourmetdelights.com.au"
          >info@gourmetdelights.com.au</a
        >
      </p>
      <p>Address: Level 1/31 Market St, Sydney NSW 2000</p>
    </section>
  </section>
</main>
@endsection
