@extends('layout')

@section('title', 'Contacto')
@section('content')
  <h1> Contacto </h1>

  <div class="form-section">
    @if (session('state'))
      {{ session('state') }}
    @else
      <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form">
          <div class="form-group">
            <label for="cContNombre"> Nombre: </label>
            <input type="text" name="cContNombre" value="{{ old('cContNombre') }}">
            {{ $errors->first('cContNombre') }}
          </div>
          <div class="form-group">
            <label for="cContEmail"> Email: </label>
            <input type="text" name="cContEmail" value="{{ old('cContEmail') }}">
            {{ $errors->first('cContEmail') }}
          </div>
          <div class="form-group">
            <label for="cContAsunto"> Asunto: </label>
            <input type="text" name="cContAsunto" value="{{ old('cContAsunto') }}">
            {{ $errors->first('cContAsunto') }}
          </div>
          <div class="form-group">
            <label for="cContMensaje"> Mensaje: </label>
            <textarea name="cContMensaje" cols="30" rows="10" value="{{ old('cContMensaje') }}"> 
            </textarea>
            {{ $errors->first('cContMensaje') }}
          </div>
          
          <div class="form-group">
            <button class="btn btn-send"> Enviar </button>
          </div>
        </div>    
      </form>
    @endif

  </div>

@endsection