@extends('layout')

@section('title', 'Editar Persona')
@section('content')

  <h1> Edición de Persona </h1>

  <div class="form-section">
    <form action="{{ route('people.update', $person) }}" method="POST" enctype="multipart/form-data">
      @method('PATCH')

      <img class="card-img-top" src="/storage/{{$person->cPerImage}}" alt="Persona {{$person->nPerCodigo}}"
          width= "400" height= "100">

      @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
  </div>
  

@endsection