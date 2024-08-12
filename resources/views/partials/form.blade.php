@csrf

<div class="form" style="height: fit-content">

  <div class="form-group">
    <label for="customFile"> Seleccione archivo </label>
    <div style="border: 1px black solid">
      <input type="file" name="cPerImage" id="customFile">
    </div>
    {{ $errors->first('cPerImage') }}
  </div>

  <div class="form-group">

    <label for="departamento_id" > Departamento: </label>
    <select name="departamento_id" id="departamento_id">
      <option value=""> Seleccione departamento </option>
      @foreach ($departamentos as $id=>$name)

        <option value="{{ $id }}" 
        @if($id == (old('departamento_id', $person->departamento_id)))
          selected
        @endif
        > {{ $name }}
        </option>
        
      @endforeach
      
    </select>

  </div>
  

  <div class="form-group">
    <label for="cPerApellido"> Apellido: </label>
    <input type="text" name="cPerApellido" value="{{ old('cPerApellido', $person->cPerApellido) }}">
    {{ $errors->first('cPerApellido') }}
  </div>

  <div class="form-group">
    <label for="cPerNombre"> Nombre: </label>
    <input type="text" name="cPerNombre" value="{{ old('cPerNombre', $person->cPerNombre) }}">
    {{ $errors->first('cPerNombre') }}
  </div>
  <div class="form-group">
    <label for="cPerDireccion"> Dirección: </label>
    <input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $person->cPerDireccion) }}">
    {{ $errors->first('cPerDireccion') }}
  </div>
  <div class="form-group">
    <label for="dPerFecNac"> Fecha de Nacimiento: </label>
    <input type="date" name="dPerFecNac" value="{{ old('dPerFecNac',$person->dPerFecNac) }}">
    {{ $errors->first('dPerFecNac') }}
  </div>
  <div class="form-group">
    {{-- puede calcularse a partir de la fecha actual, sobrecarga de tareas al usuario --}}
    <label for="nPerEdad"> Edad: </label> 
    <input type="number" name="nPerEdad" value="{{ old('nPerEdad', $person->nPerEdad) }}">
    {{ $errors->first('nPerEdad') }}
  </div>
  <div class="form-group">
    <label for="nPerSueldo"> Salario: </label> 
    <input type="number" name="nPerSueldo" value="{{ old('nPerSueldo', $person->nPerSueldo) }}">
    {{ $errors->first('nPerSueldo') }}
  </div>
  <div class="form-group">
    <label for="nPerEstado"> Estado: </label> 
    <select name="nPerEstado" id="nPerEstado">
      <option value="-1" {{ old('nPerEstado', $person->nPerEstado == NULL) ? 'selected' : '' }}>  Seleccione una opcion</option>
      <option value="0" {{ old('nPerEstado', $person->nPerEstado == 0) ? 'selected': '' }}> 0 </option>
      <option value="1" {{ old('nPerEstado', $person->nPerEstado == 1) ? 'selected': '' }}> 1 </option>
    </select>
    {{ $errors->first('nPerEstado') }}
  </div>

  <div class="form-group">
    <button class="btn btn-send"> {{ $btnText }} </button>
  </div>
  
</div>
