<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- necesario para el modulo auth --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- para auth --}}

    <title> @yield('title') </title>
    
    <style>
      .active {
      background-color: #0b3769;
      }
    </style>

  </head>
  <body>

    @include('partials.navbar')
    
    @include('partials.session-state')

    @yield('content')

  </body>
</html>