@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Editar Titulos</h1> 
    </div>
    <table class="table table-striped">
    <tbody>
      


        @foreach($titulos as $id => $title)


        <tr>
        
        <td>{{$title['name'] }}</td>
        
        <td><button type="button" class="btn btn-danger" value="$title['id']">Eliminar</button></td>
      </tr>
            @endforeach
       
    </tbody>
    </table>

      

    </div>
  </div>
  
  </form>
  
</div>
@endsection
