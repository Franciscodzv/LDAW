@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Realizar Oferta</h1> 
    </div>

      <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Foto del Título:</label>
         
      </div>

    <div class="row ">
        <div class="col-12">
          <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/10/halo-5-2111873.jpg?itok=nBQ5jpKU" class="w-100" alt="...">
            <div class="card-body ">
                    <p class="card-text text-center ">Halo 5: Guardians</p>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label class=" col-form-label" for="genero">Juego a ofertar</label>
          <select name="juegoOferta" id="juegoOferta" class="form-control">
            <option value="Aventura" selected disabled>Selecciona un Juego</option>
            <option value="Aventura">The Legend of Zelda: Breath of the Wild</option>
            <option value="Accion">Super Mario Odyssey</option>
            <option value="FPS">Conker's Bad Fur Day</option>
          </select>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>

    <div class="form-group row">
        <label class=" col-form-label" for="descripcionJuego">Estado del Juego:</label>
          <textarea type="text" id="descripcionJuego" class="form-control input-lg{{$errors->has('titulo') 
          ? 'is-invalid' : '' }}" name="descripcionJuego" aria-label="With textarea">
          </textarea>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>

      <div class="row pt-5">
            <button class="btn btn-success text-dark">Realizar Oferta</button> <!--1:50:30 tutorial laravel-->
      </div>

    </div>
  </div>
  
  </form>
  
</div>
@endsection
