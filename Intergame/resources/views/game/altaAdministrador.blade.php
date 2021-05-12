@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Dar Alta Administrador</h1> 
    </div>
    <table class="table table-striped">
    <tbody>

        @foreach($users as $id => $user) 
        @csrf
        @method('PUT')
         
            <tr>
              <td> {{ $user['name'] }}</td>
             
              <td class="d-flex justify-content-center "><a class="btn btn-primary"  href="{{ route('users.update', $user['id']) }} " >Agregar</a> <!--1:50:30 tutorial laravel--></td>
            </tr>
        @endforeach
       
    </tbody>
    </table>

      

    </div>
  </div>
  
  </form>
  
</div>
@endsection
