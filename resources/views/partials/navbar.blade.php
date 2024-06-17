<nav class="navbar">
  <a class="nav-btn {{setActive('home') }}" href="/"> Inicio </a>
  {{-- <a class="nav-btn {{setActive('programs') }}" href="programas"> Programas </a>
  <a class="nav-btn {{setActive('workshop') }}" href="talleres"> Talleres </a>
  <a class="nav-btn {{setActive('counseling') }}" href="asesoramiento"> Asesoramiento </a>
  <a class="nav-btn {{setActive('contact') }}" href="contacto"> Contacto </a> --}}
  {{-- <a class="nav-btn {{setActive('people.index') || request()->routeIs('people.show') ? 'active' : '' }}" href="/personas"> Personas </a> --}}
  <a class="nav-btn {{setActive('people.index') ?  : setActive('people.show')}} " href="/personas"> Personas </a>
  {{-- se tienen una estructura ternaria anidada --}}
  <a class="nav-btn {{setActive('contact') }}" href="/contacto"> Contacto </a>
</nav>