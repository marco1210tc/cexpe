<nav class="navbar">
  <a class="nav-btn {{setActive('home') }}" href="/"> Inicio </a>

 {{-- se tienen una estructura ternaria anidada --}}
 <a class="nav-btn {{setActive('people.index') ?  : setActive('people.show')}} " 
    href="{{route('people.index')}}"> Personas </a>

  <a class="nav-btn {{setActive('contact') }}" href="{{route('contact')}}"> Contacto </a>

</nav>