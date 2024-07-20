@extends('layout')

@section('content')
    <div class="form-section">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form">
                <div style="width: 100%; text-align: center">
                    <h2> Login </h2>
                </div>

                <div class="form-group">
                    <label for="email"> Correo electrónico</label>

                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password"> Contraseña </label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">

                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div style="width: 100%; text-align: center">

                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">
                        Recordar sesión
                    </label>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-send">
                        Login
                    </button>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
