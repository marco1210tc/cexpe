@csrf
<div class="form">

  <div class="form-group">
    <label for="cPerApellido"> Apellido: </label>
    <input type="text" name="cPerApellido" value="{{ $person->cPerApellido }}">
    {{ $errors->first('cPerApellido') }}
  </div>
  <div class="form-group">
    <label for="cPerNombre"> Nombre: </label>
    <input type="text" name="cPerNombre" value="{{ $person->cPerNombre }}">
    {{ $errors->first('cPerNombre') }}
  </div>
  <div class="form-group">
    <label for="cPerDireccion"> Dirección: </label>
    <input type="text" name="cPerDireccion" value="{{ $person->cPerDireccion }}">
    {{ $errors->first('cPerDireccion') }}
  </div>
  <div class="form-group">
    <label for="dPerFecNac"> Fecha de Nacimiento: </label>
    <input type="date" name="dPerFecNac" value="{{ $person->dPerFecNac }}">
    {{ $errors->first('dPerFecNac') }}
  </div>
  <div class="form-group">
    {{-- puede calcularse a partir de la fecha actual, sobrecarga de tareas al usuario --}}
    <label for="nPerEdad"> Edad: </label> 
    <input type="number" name="nPerEdad" value="{{ $person->nPerEdad }}">
    {{ $errors->first('nPerEdad') }}
  </div>
  <div class="form-group">
    <label for="nPerSueldo"> Salario: </label> 
    <input type="number" name="nPerSueldo" value="{{ $person->nPerSueldo }}">
    {{ $errors->first('nPerSueldo') }}
  </div>
  <div class="form-group">
    <label for="nPerEstado"> Estado: </label> 
    <select name="nPerEstado" id="nPerEstado">
      <option value="-1" {{ ($person->nPerEstado == '-1') ? : 'selected', '' }}>  Seleccione una opcion</option>
      <option value="0" {{ ($person->nPerEstado == 0) ? : 'selected', '' }}> 0 </option>
      <option value="1" {{ ($person->nPerEstado == 1) ? : 'selected', '' }}> 1 </option>
    </select>
    {{ $errors->first('nPerEstado') }}
  </div>

  <div class="form-group">
    <button class="btn btn-send"> {{ $btnText }} </button>
    {{-- <button class="btn btn-send"> Guardar </button> --}}
  </div>
  
</div>
