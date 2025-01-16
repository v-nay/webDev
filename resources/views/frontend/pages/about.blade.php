@extends('frontend.layouts.app')
@section('meta_title', '')
@section('meta_description','')

@section('content')

<main>
  <!-- About Us Section -->
  <section class="about-us">
    <h1 class="section-title">About Us</h1>
    <p class="intro">
      At Gourmet Delights Bistro, we strive to create experiences that transcend mere dining. Drawing on a lifelong love of food and dedication to perfection, we unite quality products, innovative methods, and the ideal environment to provide you with memories that last. Each dish tells a tale, and each visit is a chance to honour the craft of haute cuisine.
    </p>

    <!-- Our Journey Section -->
    <div class="about-row">
      <article class="text-block">
        <h2>Our Journey</h2>
        <p>
          What began as a modest aspiration has grown into a lively gastronomic destination. What has guided us during our journey has truly been our love of great food, passion for quality, and desire to create lasting memories for you and your loved ones. From a cardboard box to a name that’s become synonymous with gourmet, we’ve continued to strike the balance between tradition and innovation —– and in doing so created experiences as unforgettable as our flavors.
        </p>
      </article>
      <figure class="about-image-container">
        <img src="images/about.jpg" alt="Chef preparing a meal" class="about-image">
      </figure>
    </div>

    <!-- Mission and Testimonials -->
    <section class="mission-test-container" aria-labelledby="mission-testimonials">
      <article class="mission-card">
        <h3>Our Mission</h3>
        <p>
          "We aim to create unforgettable moments through each meal. We are dedicated to serving world class cuisine that nourishes the heart and enchants the taste buds."
        </p>
      </article>
      <aside class="testimonials-container">
       <h3>What Our Customers Say</h3>
          <p>"The best dining experience in the city!"<br><strong>- By Lora Jones</strong></p>
      </aside>
  </section>
  </section>
</main>
@endsection