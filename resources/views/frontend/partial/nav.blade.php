<nav>
      <ul class="nav-links">
      @foreach($headings as $heading)
      
        <li><a href="{{ url('/'.strtolower($heading->name)) }}">{{ $heading->name }}</a></li>
    @endforeach
      <!-- <li><a href="{{url('/special')}}">Specials</a></li>
      <li><a href="{{url('/reservation')}}">Reservations</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{url('/contact')}}">Contact</a></li> -->
        
      </ul> 
    </nav>