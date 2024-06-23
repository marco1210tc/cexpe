@extends('layout')

@section('title', 'Editar Persona')
@section('content')

  <h1> Edición de Persona </h1>

  <form action="{{ route('people.update', $person) }}" method="POST">
    @method('PATCH')
    @include('partials.form', ['btnText' => 'Actualizar'])
  </form>

@endsection