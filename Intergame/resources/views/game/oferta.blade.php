@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 offset-2">
      <div class="row">
        <h1>Realizar Oferta</h1> 
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
     
      <table class="table table-dark">
      <thead class="table table-dark">
        <th>
          Condición del Juego
        </th>
        <th>
          Juego a Ofertar
        </th>
      </thead>
      <tbody>
      @foreach($games['games'] as $game)
       <tr>
        <td>
          {{$game['condition']}}
          <td>
            <select class="form-select" name="titles" id="titles">
              <option value="" selected>Selecciona Un Juego a Ofertar</option>
              @foreach($games['offers'] as $offer)
              <option value="">{{$offer['name']}}</option>
              @endforeach
            </select>
          </td>
        </td>
       
      @endforeach

      

        

      



      </tr>
      </tbody>
      

      
      </table>
    </div>
</div>
@endsection
