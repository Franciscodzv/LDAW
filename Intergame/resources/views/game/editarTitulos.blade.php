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
        <tr>
        
            <td>Titulo 1</td>
            <td><button class="btn btn-primary">Editar</button> <!--1:50:30 tutorial laravel--></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
        
            <td>Titulo 2</td>
            <td><button class="btn btn-primary">Editar</button> <!--1:50:30 tutorial laravel--></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
        
            <td>Titulo 3</td>
            <td><button class="btn btn-primary">Editar</button> <!--1:50:30 tutorial laravel--></td>
            <td><button type="button" class="btn btn-danger">Eliminar</button></td>
        </tr>
    </tbody>
    </table>

      

    </div>
  </div>
  
  </form>
  
</div>
@endsection
