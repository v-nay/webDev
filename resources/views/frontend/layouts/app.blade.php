<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gourmet Delights Bistro</title>
  <!-- External Stylesheet linked for main styles -->
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="{{ asset('theme/css/styles.css') }}">
  <script src="{{ asset('theme/js/main.js') }}" defer></script>
  <!-- Javascript linked for Navigation bar functionality-->
  <script src="scripts/nav.js" defer></script>
  
</head>
<body>
    @include('frontend.partial.header') 
        <div id="app">
                @yield('content')
        </div>
    @include('frontend.partial.footer')
</body>
</html>