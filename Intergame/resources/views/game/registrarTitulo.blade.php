@extends('layouts.app')

@section('content')
@if ((session('token')))
<div class="container">

  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Usuario Registra Juego</h1> 
    </div>
    <form action="{{route('games.store')}}" method="post" > 
    @csrf
    <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Título del Juego:</label>
         
          @if($errors->has('registrarJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('registrarJuego')}}</strong>
            </span>
          @endif
      </div>
      <div class="form-group">
      <select class="form-control" id="title_id" name="title_id" required>
      @foreach($titulos as $id => $title)           
                <option value="{{$title['id']}}">{{$title['name'] }} </option>
            @endforeach
            
            </select>
            </div>
    <div class="row">
        <label class="col-form-label" for="imagenJuego">Condicion:</label>

        </div>
        <div class="form-group">
          
            <select class="form-control" id="condition" name="condition" required>
            <option  disabled selected>Selecciona una opcion</option>
              <option value="Nuevo">Nuevo</option>
              <option value="Semi-Nuevo">Semi-Nuevo</option>
              <option value="Usado">Usado</option>
        
            </select>
          
             
      <div class="row pt-3">
            <button class="btn btn-primary">Registrar Juego</button> <!--1:50:30 tutorial laravel-->
      </div>
      </div>
      </form > 

    </div>
  </div>
  

  
</div>
@endif
@endsection
