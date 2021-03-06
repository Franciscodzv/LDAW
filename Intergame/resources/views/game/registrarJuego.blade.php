@extends('layouts.app')

@section('content')
@if ((session('id')) == 1)
<div class="container">
 
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Administrador Registra Título</h1> 
    </div>

    <form action="{{route('titulos.store')}}" method="post" > 
    @csrf
      <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Título del Juego</label>
          <input type="text" id="name" class="form-control{{$errors->has('titulo') 
          ? 'is-invalid' : '' }}" name="name" required>
          @if($errors->has('registrarJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('registrarJuego')}}</strong>
            </span>
          @endif
      </div>

      <div class="form-group row">
        <label class=" col-form-label" for="genero">Género del Juego</label>
          <select name="genre" id="genre" class="form-control" required>

        @foreach($genres as $id => $genre) 
      
              <option value="{{ $genre['id'] }}" >{{ $genre['name'] }}</option>
           
          @endforeach
            
         


          </select>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>

      <div class="form-group row">
        <label class=" col-form-label" for="descripcionJuego">Descripción del Juego</label>
          <textarea type="text" id="description" class="form-control input-lg{{$errors->has('titulo') 
          ? 'is-invalid' : '' }}" name="description" aria-label="With textarea" required>
          </textarea>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>

      <div class="row">
        <label class="col-form-label" for="imagenJuego">Imagen del Juego</label>
        <input type="text" class="form-control-file" id="image" name="image" required>
        @if($errors->has('imagenJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('imagenJuego')}}</strong>
            </span>
          @endif
      </div>

      <div class="row pt-5">
            <button type="submit" class="btn btn-primary">Registrar Juego</button> 
      </div>



      </form> 
    </div>
  </div>

  
</div>
@endif
@endsection
