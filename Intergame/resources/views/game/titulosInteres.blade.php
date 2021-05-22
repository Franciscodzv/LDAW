@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Registrar Titulos de Interes</h1> 
    </div>

      <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Títulos:</label>
      </div>

      <form action="{{route('registrarTitulosInteres.store')}}" method="post" > 
    @csrf
    @foreach($titulos as $id => $title)


    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="{{$title['id'] }}" value="{{$title['id'] }}" name="id_title[]">
      <label class="form-check-label" for="inlineCheckbox2">{{$title['name'] }}</label>
    </div>

     
@endforeach
    
    <div class="row pt-5">
            <button class="btn btn-primary" type="submit">Registrar Titulos</button> <!--1:50:30 tutorial laravel-->
      </div>
        </form> 

            

    



    </div>
  </div>
  

  
</div>
@endsection
