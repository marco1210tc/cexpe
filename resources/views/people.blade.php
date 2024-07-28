@extends('layout')
{{-- para la paginacion --}}
<script src="https://cdn.tailwindcss.com"></script>

@section('title', 'Personas')

@section('content')

  <h1> Personas </h1>

  @auth

  <div style="width: 100%; margin: 25px; text-align: center;">
    <span> &#x271A; </span>
    <a class="btn btn-add" href="{{ route('people.create') }}" > Agregar nueva persona </a>
  </div>

  @endauth

  <div class="table-centered">
    <table>
      <thead> 
        <tr> 
          <th>Imagen</th>
          <th>Nombre</th> 
          <th>Apellido</th> 
          <th>Sueldo</th> 
          <th>Direccion</th> 
          <th>Estado</th> 
          <th>Codigo</th> 
          @auth
          <th>Accion</th> 
          @endauth
        </tr>
      </thead> 
      <tbody>
      @if ($people)
        @foreach ($people as $person)
          <tr> 
            @if ($person->cPerImage)
              <td>
                <img src="/storage/{{$person->cPerImage}}" width="50" height="50">
              </td>
            @else    
              <td>
                Sin imagen
              </td>
            @endif
            
            <td>{{ $person->cPerNombre }}</td> 
            <td> {{ $person->cPerApellido }}</td>
            <td> {{$person->nPerSueldo}} </td>
            <td>{{$person->cPerDireccion}} </td>
            <td>{{$person->nPerEstado}} </td>
            <td> {{ $person->nPerCodigo }} </td>

            @auth
            <td > 
              
              <div style="display: flex; justify-content: space-evenly; align-items: center;">
                <a class="btn" href="{{ route('people.show', $person) }}"> Ver </a>

                <a class="btn btn-edit" href=" {{ route('people.edit', $person) }}"> Editar  </a>
                
                <form style="margin:0;" action="{{ route('people.destroy', $person) }}" method="POST">
                  @csrf @method('DELETE')
                  <button type='submit' class="btn btn-delete"> Eliminar </button> 
                </form>
              </div>
            </td>
            @endauth

          </tr>
        @endforeach
      </tbody>
      @else
        <h3> No existen datos </h3>
      @endif
    </table>
    
  </div>

  <div class="w-100-dvh flex justify-center">

    <div style="width: 40%" class="mt-5 ">
      {{ $people->links() }}
    </div>

  </div>
  
@endsection