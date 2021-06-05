@extends('layouts.app')

@section('content')
@if(session('rol') == 1)
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Dar Alta Administrador</h1> 
    </div>
    <table class="table  table-striped table-dark">
   
    <thead>
          <tr>
              <th> Nombre del Usuario</th>
             
              <th class="d-flex justify-content-center "> 
              <form action="" method="post">
                  @csrf
                  @method('PUT')
                Accion
                </form>
              </th>
              
            </tr>

     </thead>
      <tbody>
     
        @foreach($users as $id => $user) 
       
            <tr>
              <td> {{ $user['name'] }}</td>
             
              <td class="d-flex justify-content-center "> 
                <form action="{{ route('users.update',$user['id']) }} " method="post">
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
  

  
</div>
@endif
@endsection
