@extends('layouts.app')

@section('content')
@if ((session('token')))
<div class="container">
    <div class="col-8 offset-2">
      <div class="row">
        <h1>Realizar Oferta</h1> 
      </div>
      </div>
      <br><br>
      <h1 class="text-center">
        <div class="col-8 offset-2">
          @foreach($games['title'] as $title)
            
          {{$title['name']}}
        </div>
      </h1>
      <br>
      <div class="text-center">
        <img src="{{$title['image']}}" style="height:400px; width:400px">
      </div>
        @endforeach
      <br><br>
      <div class="col-8 offset-2">
   

      @foreach($games['games'] as $game)
      <div class="card mt-3">
      <form  action="{{route('offers.store')}}" method="post">
        @csrf
        <input type="text"  value=" {{$game['id']}}" name="gameOwn_id"  id="gameOwn_id" hidden>
         
        <div class="card-header">
        Condicion del juego:{{$game['condition']}} 
        </div>
        <div class="card-body">
          
          <p class="card-text">
              
          Seleccion el juego que quieres cambiar:
            <select  class="form-control" name="gameOffer_id" id="gameOffer_id">
              <option selected>Selecciona Un Juego a Ofertar</option>
              @foreach($games['offers'] as $offer)
              <option value="{{$offer['id']}}"  >{{$offer['name']}}</option>
              @endforeach
            </select>
         
            </p>
          <button type="submit" class="btn btn-primary">Ofertar</button>
        </div>
        </form>
      </div>
      @endforeach
      </div>
   
</div>
@endif
@endsection
