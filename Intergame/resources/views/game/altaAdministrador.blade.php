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
       
            <tr>
              <td> {{ $user['name'] }}</td>
             
              <td class="d-flex justify-content-center "> 
                <form action="{{ url('users/'.$user['id']) }} " method="post">
                  @csrf
                  @method('PUT')
                  <button type="submit" class="btn btn-primary"   >Agregar</button> 
                </form>
              </td>
              
            </tr>
        @endforeach
       
    </tbody>
    </table>

      

    </div>
  </div>
  
  </form>
  
</div>
@endsection
