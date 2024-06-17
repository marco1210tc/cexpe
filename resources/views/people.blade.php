@extends('layout')

@section('title', 'Personas')

@section('content')
<h1>Personas</h1>

<div style="width: 100%; margin: 25px; text-align: center">
  <span> &#x271A; </span>
  <a href="{{ route('people.create') }}" > Agregar nueva persona </a>
</div>

<div class="table-centered">
  <table>
    <thead> 
      <tr> <th>Nombre</th> <th>Apellido</th> <th>Sueldo</th> <th>Direccion</th> <th>Codigo</th> <th>Accion</th> </tr>
    </thead> 
    <tbody>
    @if ($people)
      @foreach ($people as $person)
        <tr> 
          <td>{{ $person->cPerNombre }}</td> 
          <td> {{ $person->cPerApellido }}</td>
          <td> {{$person->nPerSueldo}} </td>
          <td>{{$person->cPerDireccion}} </td>
          <td> <a href="{{ route('people.show', $person) }}"> {{ $person->nPerCodigo }} </a></td>
          <td> <a href="#"> Editar | Borrar </a></td>
        </tr>
      @endforeach
    </tbody>
    @else
      <h3> No existen datos </h3>
    @endif
  </table>
</div>
@endsection