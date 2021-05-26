@extends('layouts.app')

@section('content')
<div class="container">

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

<br>
  
      <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Condición</th>
          <th scope="col">Oferta</th>
        </tr>
      </thead>
      <tbody>
      @foreach($titulo["games"] as  $game)

      <tr>
      <th scope="row">{{$titulo["name"]}}</th>
      <td>{{   $game['condition'] }}</td>
      <td> <a class="btn btn-primary" href="{{ route()}}">  {{   $game['user_id'] }} Ofertar  {{   $titulo["id"] }} </a>   </td>
      </tr>
    
    
      
    

      @endforeach
     
     
      
     
     
        </tbody>
    </table>

    </div>
  </div>
  
 
  
</div>
@endsection
