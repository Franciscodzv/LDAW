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

      <form action="{{route('titulos.store')}}" method="post" > 
    @csrf
    @foreach($titulos as $id => $title)


    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="{{$title['id'] }}" value="{{$title['id'] }}">
      <label class="form-check-label" for="inlineCheckbox2">{{$title['name'] }}</label>
    </div>

     
@endforeach

        </form> 

            

      <div class="row pt-5">
            <button class="btn btn-primary" type="submit">Registrar Titulos</button> <!--1:50:30 tutorial laravel-->
      </div>



    </div>
  </div>
  

  
</div>
@endsection
