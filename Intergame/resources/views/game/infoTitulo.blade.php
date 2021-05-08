@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>{{$titulo["name"]}}</h1> 
    </div>

    <div class="row ">
             <div class="col-12">
                    <img src={{$titulo['image']}} class="w-100" alt="...">
                        <div class="card-body ">
                    </div>
                </div>
    </div>
    <div class="form-group row">
        <label class=" col-form-label" for="descripcionJuego">{{$titulo["description"]}}</label>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>
      
      <div>
            <p>Comentarios:</p>
      </div>
      
      @foreach($titulo["reviews"] as $review)

      <div class="form-group row">
        <p>{{$review['date']}}</p>
        <p>{{$review['name']}}</p>
        <p> {{$review['description']}}</p>
      </div>

      @endforeach

      <div class="row pt-5">
          <textarea type="text" id="descripcionJuego" class="form-control input-lg{{$errors->has('titulo') 
              ? 'is-invalid' : '' }}" name="descripcionJuego" aria-label="With textarea">
          </textarea>
            <button class="btn btn-primary">Agregar Reseña</button> <!--1:50:30 tutorial laravel-->
      </div>

    </div>
  </div>
  
  </form>
  
</div>
@endsection
