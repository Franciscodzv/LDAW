@extends('layouts.app')

@section('content')
<div class="container">
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="row justify-content-center">
        <nav class="navbar  mt-5">
            <div class="container-fluid justify-content-center ">
                <form class="d-flex">
                <input class="form-control form-control-lg  col-sm-12 me-2" type="search" placeholder="Mario Bros..." aria-label="Search">
                <button class="btn btn-success ml-4 btn-lg" type="submit" style="color:black">Buscar</button>
                </form>
            </div>
        </nav>

       
            <div class="row pt-3 flex">
            @foreach($titulos as $id => $title)
                <div class="col-lg-4  col-xs-11 ">
                    <a href="{{ route('titulos.show', $title['id']) }}">
                        <img src={{  $title['image']  }}  class="w-100 rounded " height="90%" width="90%" alt="...">
                    </a>
                        <div class="card-body card-text text-center">
                        <a href="{{ route('titulos.show', $title['id']) }}" class="btn btn-primary">{{$title['name'] }}</a>
                    </div> 
                </div>
            @endforeach
             
            

              
          
            </div>
    </div>
</div>

@endsection
