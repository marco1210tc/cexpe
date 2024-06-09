@extends('layout')

@section('title', 'Prsn ' . $person->cPerNombre)
@section('content')
  <h2> Datos: </h2>
  {{-- {{$person}} --}}
  <p>Codigo: {{ $person->nPerCodigo }}</p>
  <p>Nombre: {{ $person->cPerNombre }}</p>
  <p>Apellido: {{ $person->cPerApellido }}</p>
  <p>Sueldo: {{ $person->nPerSueldo }}</p>

@endsection