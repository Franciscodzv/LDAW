@extends('layouts.app')

@section('content')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  <div class="row"> 
    <div class="col-8 offset-2">

    <div>
     <h1>{{$titulo["name"]}}</h1> 
    
    </div>

    <div class="row ">
             <div class="col-12">
                    <img src={{$titulo['image']}} class="w-100" alt="...">
                        <div class="card-body ">
                    </div>
                </div>
    </div>
    <div class="text-right">
      <a href="{{url('offers/'.$titulo['id'])}}" class="btn btn-success btn btn-lg text-dark ">Realizar Oferta</a>
    </div>
    <br><br>
    <div class="">
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
      
      @foreach($titulo["reviews"] as  $review)

      <div class="form-group row">
        <p> {{   $review['description'] }}</p>
      </div>

      @endforeach




      <form action="{{route('review.store')}}" method="post" > 
    @csrf
        <div class="form-group ">
        <input type="text" id="title_id" name="title_id" value='{{$titulo["id"]}}'  hidden>

            <textarea type="text" id="description" class="form-control  input-lg{{$errors->has('titulo') 
                ? 'is-invalid' : '' }}" name="description" aria-label="With textarea" required>
            </textarea> 

            
             
        </div>
        <button class="btn btn-primary " type="submit">Agregar Reseña</button> 
      </form>

    </div>
  </div>
  
 
  
</div>
@endsection
