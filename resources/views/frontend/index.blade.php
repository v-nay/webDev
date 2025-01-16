
@extends('frontend.layouts.app')
@section('meta_title', '')
@section('meta_description','')
@section('content')
  <main>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>A Taste of Elegance</h1>
      <p>Welcome! Gourmet Delights Bistro, where every plate is an exquisite work of art and culinary genius. Using top-quality products, our chefs create gorgeous dishes with a perfect assembly of classical and modern philosophy. From appetizers elegantly arranged on a plate to desserts that are pure indulgence, every bite is a glorious adventure in taste. Introducing a remarkable dining experience inspired by bistro culture.</p>
      <a href="menu.html" class="btn">Explore Menu</a>
    </div>
    <img src="images/homebg.jpg" alt="Delicious gourmet meal" class="hero-image">
  </section>

  <!-- Features Section -->
  <section class="features">
    <article class="feature-card">
      <img src="images/specialhome.jpg" alt="Chef's Special">
      <h3>Chef's Special</h3>
      <p>Discover the flavorful creations by our Chef.</p>
      <a href="special.html" class="btn">Explore</a>
    </article>
    <article class="feature-card">
      <img src="images/review.jpg" alt="Customer Reviews">
      <h3>Customer Reviews</h3>
      <p>Our guests rave about the unique flavors and warm hospitality we provide.</p>
      <a href="about.html" class="btn">Explore</a>
    </article>
    <article class="feature-card">
      <img src="images/ourstoryhome.jpg" alt="Our Story">
      <h3>Our Story</h3>
      <p>We take time-honored flavors and modernize them and we make them with passion and tradition.</p>
      <a href="about.html" class="btn">Explore</a>
    </article>
  </section>
  </main>
  @endsection
 
  

