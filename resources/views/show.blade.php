@extends('layout')

@section('title', 'Prsn ' . $person->cPerNombre)
@section('content')
  <h2> Datos: </h2>
  {{-- {{$person}} --}}
  <p>Codigo: {{ $person->nPerCodigo }}</p>
  <p>Nombre: {{ $person->cPerNombre }}</p>
  <p>Apellido: {{ $person->cPerApellido }}</p>
  <p>Sueldo: {{ $person->nPerSueldo }}</p>

  <a href="{{ route('people.index')}}"> << Retornar a vista principal </a>

@endsection