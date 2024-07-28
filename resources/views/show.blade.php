<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@extends('layout')

@section('title', 'Prsn ' . $person->cPerNombre)
@section('content')

  {{-- {{$person}} --}}
  {{-- codigo viejo --}}
  
    {{-- <img src="/storage/{{$person->cPerImage}}" width="100" height="50" alt="">
    <p>Codigo: {{ $person->nPerCodigo }}</p>
    <p>Nombre: {{ $person->cPerNombre }}</p>
    <p>Apellido: {{ $person->cPerApellido }}</p>
    <p>Sueldo: {{ $person->nPerSueldo }}</p> --}}
  
<div class="container ml-4 mt-4">
  <h2> Datos: </h2>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/storage/{{$person->cPerImage}}" alt="Persona {{$person->nPerCodigo}}">
    <div class="card-body">
      <h5 class="card-title"> {{$person->cPerNombre . " " . $person->cPerApellido}}</h5>
      <p class="card-text"> <b> Dirección: </b> {{$person->cPerDireccion}}</p>
      <p class="card-text"> <b> Sueldo: </b> {{$person->nPerSueldo}} </p>
      <p class="card-text"> <b> Edad: </b> {{$person->nPerEdad}} </p>
      <p class="card-text"> <b> Sexo: </b> {{$person->cPerSexo}} </p>
      <p class="card-text"> <b> F. Nacimiento: </b> {{$person->dPerFecNac}} </p>
      {{-- <p class="card-text"> <b> F. Nacimiento: </b> {{$person->dPerFecNac->diffForHumans()}} </p> --}}
      <a href="{{ route('people.index')}}" class="btn btn-primary"><< Retornar</a>
    </div>
  </div>

</div>
  

  {{-- <a href="{{ route('people.index')}}"> << Retornar a vista principal </a> --}}

@endsection