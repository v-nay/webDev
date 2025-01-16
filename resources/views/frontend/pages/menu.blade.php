@extends('frontend.layouts.app')
@section('meta_title', '')
@section('meta_description','')

@section('content')
<main>
  <!-- Hero Section -->
  <section class="menu-hero">
    <header class="hero-content">
      <h1>Our Exquisite Menu</h1>
      <p>
        Experience the art of fine dining with our prix fixe menu, prepared with
        passion and the freshest ingredients, to tantalize every palate.
      </p>
    </header>
  </section>

  <!-- Menu Categories -->
  <section class="menu-section">
    <h2 class="section-title">Discover Our Offerings</h2>
    <div class="menu-gallery">
      <article class="menu-item" data-category="appetizers">
        <img src="images/appetizers.jpg" alt="Appetizers" />
        <h3>Appetizers</h3>
        <p>A wonderful start to your gourmet journey.</p>
      </article>
      <article class="menu-item" data-category="main-courses">
        <img src="images/main-courses.jpg" alt="Main Courses" />
        <h3>Main Courses</h3>
        <p>Dishes that are hearty and full of flavor to sate your appetite.</p>
      </article>
      <article class="menu-item" data-category="desserts">
        <img src="images/desserts.jpg" alt="Desserts" />
        <h3>Desserts</h3>
        <p>Finish off your meal on a sweet note.</p>
      </article>
      <article class="menu-item" data-category="beverages">
        <img src="images/beverages.jpg" alt="Beverages" />
        <h3>Beverages</h3>
        <p>A selection of refreshing drinks to pair with your meal.</p>
      </article>
    </div>
  </section>
  <!-- dynamic menu details section -->
  <section
    class="menu-details"
    id="menu-details"
    aria-label="Detailed Menu Section"
  >
    <div class="menu-details-content">
      <!-- Dynamic content -->
    </div>
  </section>
</main>
@endsection