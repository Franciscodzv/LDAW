@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Registrar Titulo</h1> 
    </div>

    <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Título del Juego:</label>
          <input type="text" id="registrarJuego" class="form-control{{$errors->has('titulo') 
          ? 'is-invalid' : '' }}" name="registrarJuego" >
          @if($errors->has('registrarJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('registrarJuego')}}</strong>
            </span>
          @endif
      </div>

    <div class="form-group row">
        <label class=" col-form-label" for="descripcionJuego">Categoria:</label>
      </div>

      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">the legend of zelda</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">mario bros</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">the legend of zelda</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">mario bros</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">the legend of zelda</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
      <label class="form-check-label" for="inlineCheckbox1">mario bros</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
      <label class="form-check-label" for="inlineCheckbox2">the legend of zelda</label>
    </div>
        

    <div class="row">
        <label class="col-form-label" for="imagenJuego">Imagen del Juego</label>
        <input type="file" class="form-control-file" id="imagenJuego" name="imagenJuego">
        @if($errors->has('imagenJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('imagenJuego')}}</strong>
            </span>
          @endif
      </div>
  

      <div class="row pt-5">
            <button class="btn btn-primary">Agregar Titulo</button> <!--1:50:30 tutorial laravel-->
      </div>

    </div>
  </div>
  
  </form>
  
</div>
@endsection
