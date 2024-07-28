@extends('layout')

@section('title', 'Crear usuario')

@section('content')
  <h3 style="width: 100%; text-align: center"> Agregar nuevo usuario </h3>

  <div class="form-section">
    <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
      @include('partials.form', ['btnText' => 'Agregar'])
    </form>
  </div>
@endsection