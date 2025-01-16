@extends('frontend.layouts.app')
@section('meta_title', '')
@section('meta_description','')

@section('content')
<main>
  <!-- Chef's Special Section -->
  <section class="special-page">
    <h2 class="special-title">Chef’s Special</h2>
    <div class="specials-container">
      <article class="special-item">
        <img src="images/special1.jpg" alt="Dish 1">
        <h3>Grilled Salmon Delight</h3>
        <p>Excellent grilled salmon accompanied by fresh vegetables, sauce.</p>
        <p><strong>A$29.99</strong></p>
      </article>
      <article class="special-item">
        <img src="images/special2.jpg" alt="Dish 2">
        <h3>Bruschetta Trio</h3>
        <p>A trio of artisan bruschettas topped with tomato, basil and olive oil for a classic Italian finish.</p>
        <p><strong>A$29.99</strong></p>
      </article>
      <article class="special-item">
        <img src="images/special3.jpg" alt="Dish 3">
        <h3>Passionfruit Cheesecake</h3>
        <p>A velvety cheesecake drizzled with tart passionfruit syrup for a sweet and zesty finish</p>
        <p><strong>A$29.99</strong></p>
      </article>
    </div>
    <a href="menu.html" class="btn">View Full Menu</a>
  </section>
  
  </main>
  @endsection