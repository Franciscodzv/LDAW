@extends('layouts.app')

@section('content')
<div class="container">
  

      <div class="row">
     
        <div class="col-lg-8  ">
          <h1>Ofertas</h1> 
        </div>
      </div>

  <div class="row flex">
    <div class="col-lg-12  col-xs-12 table-responsive">

    <table class="table table-striped">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Juego Propio</th>
      <th scope="col">Condicion de mi Juego</th>
      <th scope="col">Juego Ofrecido</th>
      <th scope="col">Condicion del Juego Ofrecido</th>
      <th scope="col">Aceptar/Rechazar</th>
    </tr>
  </thead>
    <tbody>
    @foreach($offers as   $id => $offer) 
        <tr>
            <td>  {{$offer["name"]}}</td>
            <td>{{$offer["condition"]}}</td>
            <td>{{$offer["nombreOfrecido"]}}</td>
            <td>{{$offer["condicionOfrecida"]}}</td>
            <td> <form action="{{ url("notifications/{$offer['id_oferta']}") }}" method="post"> @csrf
                  @method('DELETE')
            <input type="text" value='{{$offer["id_oferta"]}}' name="id" id="id" hidden>
            <button class="btn btn-success text-dark"  type="submit">Aceptar</button> 
            <button type="submit" class="btn btn-danger">Eliminar</button></form> </td>
        </tr>
        @endforeach
    </tbody>
    </table>

   
  
   

    </div>
  </div>
 
  
</div>
@endsection
