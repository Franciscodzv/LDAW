@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <nav class="navbar  mt-5">
            <div class="container-fluid justify-content-center ">
                <form class="d-flex">
                <input class="form-control form-control-lg  col-sm-12 me-2" type="search" placeholder="Mario Bros..." aria-label="Search">
                <button class="btn btn-success ml-4 btn-lg" type="submit" style="color:black">Buscar</button>
                </form>
            </div>
        </nav>

        <div class="container">
            <div class="row pt-5 flex">
            @foreach($titulos as $id => $titulo)
                <div class="col-4">
                    <img src="{{ url( $imagen ) }}" class="w-100" alt="...">
                        <div class="card-body ">
                        <p class="card-text text-center ">{{ $name }}</p>
                        <a href="{{ route("titulos.show",["titulo" => $id]) }}" class="btn btn-primary">Detalle</a>
                    </div>
                </div>
            @endforeach
             
            
                <!--div class="col-4">
                    <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/10/halo-5-2111873.jpg?itok=nBQ5jpKU" class="w-100" alt="...">
                        <div class="card-body ">
                        <p class="card-text text-center ">Title 3</p>
                    </div>
                </div-->
            </div>
        </div>
    </div>
</div>
@endsection
