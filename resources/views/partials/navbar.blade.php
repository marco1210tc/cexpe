<nav class="navbar">
  <a class="nav-btn {{setActive('home') }}" href="/"> Inicio </a>

 {{-- se tienen una estructura ternaria anidada --}}
  <a class="nav-btn {{setActive('people.index') ?  : setActive('people.show')}} " 
    href="{{route('people.index')}}"> Personas </a>

  <a class="nav-btn {{setActive('contact') }}" href="{{route('contact')}}"> Contacto </a>

  @guest
    
    <div class="login-register-block">
      <a class="nav-btn {{setActive('login') }}" href="{{route('login')}}"> Login </a>
      <a class="nav-btn {{setActive('register') }}" href="{{route('register')}}"> Registrar </a>         
      @else
      <a class="nav-btn" style="background-color: gray" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> Cerrar sesión
      </a>
    </div>

  @endguest

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
</nav>