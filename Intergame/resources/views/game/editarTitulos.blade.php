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
    <thead>
          <tr>
              <th> Titulo</th>
             
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
      


        @foreach($titulos as $id => $title)


            <tr>
            
            <td>{{$title['name'] }}</td>
           
            <td>   <form action="{{  url('titulos/'.$title['id']) }} " method="POST">

     
                      @csrf
                      @method('DELETE')  
                       <button type="submit" class="btn btn-danger" >Eliminar</button>
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
