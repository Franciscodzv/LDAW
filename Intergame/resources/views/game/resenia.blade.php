@extends('layouts.app')

@section('content')
<div class="container">
  <form action="">
  <div class="row">
    <div class="col-8 offset-2">

    <div class="row">
     <h1>Nombre del Título</h1> 
    </div>

      <div class="form-group row pt-2">
        <label class=" col-form-label" for="registrarJuego">Foto del Título:</label>
         
      </div>

    <div class="row ">
             <div class="col-12">
                    <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/10/halo-5-2111873.jpg?itok=nBQ5jpKU" class="w-100" alt="...">
                        <div class="card-body ">
                        <!--<p class="card-text text-center ">Halo 5: Guardians</p>-->
                    </div>
                </div>
    </div>
    <div class="form-group row">
        <label class=" col-form-label" for="descripcionJuego">Escribir Reseña:</label>
          <textarea type="text" id="descripcionJuego" class="form-control input-lg{{$errors->has('titulo') 
          ? 'is-invalid' : '' }}" name="descripcionJuego" aria-label="With textarea">
          </textarea>
          @if($errors->has('descripcionJuego'))
            <span class="invalid-feedback" role="alert">
              <strong>{{$errors->first('descripcionJuego')}}</strong>
            </span>
          @endif
      </div>
        

      <div class="form-group row">
        <p> Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam posuere v
        enenatis mattis. Vivamus at mi ullamcorper, porta orci eu, iaculis nul
        la. Mauris vel rhoncus metus. Proin vel facilisis ante, sed mollis leo. Vivamus non 
        nibh porttitor, lacinia velit nec, scelerisque velit. Phasellus purus arcu, malesuada eget i
        mperdiet vitae, molestie non ex. Phasellus sollicitudin ligula fermentum pellentesque lobortis. Duis
         lacinia pellentesque leo et aliquet. Nulla auctor leo id pussy ultricies facilisis. 
         Vestibulum tristique hendrerit ultrices. Sed auctor semper turpis.
         </p>
      </div>

      <div class="form-group row">
        <p> Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam posuere v
        enenatis mattis. Vivamus at mi ullamcorper, porta orci eu, iaculis nul
        la. Mauris vel rhoncus metus. Proin vel facilisis ante, sed mollis leo. Vivamus non 
        nibh porttitor, lacinia velit nec, scelerisque velit. Phasellus purus arcu, malesuada eget i
        mperdiet vitae, molestie non ex. Phasellus sollicitudin ligula fermentum pellentesque lobortis. Duis
         lacinia pellentesque leo et aliquet. Nulla auctor leo id eros ultricies facilisis. 
         Vestibulum tristique hendrerit ultrices. Sed auctor semper turpis.
         </p>
      </div>

      <div class="form-group row">
        <p> Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit. Aliquam posuere v
        enenatis mattis. Vivamus at mi ullamcorper, porta orci eu, iaculis nul
        la. Mauris vel rhoncus metus. Proin vel facilisis ante, sed mollis leo. Vivamus non 
        nibh porttitor, lacinia velit nec, scelerisque velit. Phasellus purus arcu, malesuada eget i
        mperdiet vitae, molestie non ex. Phasellus sollicitudin ligula fermentum pellentesque lobortis. Duis
         lacinia pellentesque leo et aliquet. Nulla auctor leo id eros ultricies facilisis. 
         Vestibulum tristique hendrerit ultrices. Sed auctor semper turpis.
         </p>
      </div>

      <div class="row pt-5">
            <button class="btn btn-primary">Agregar Reseña</button> <!--1:50:30 tutorial laravel-->
      </div>

    </div>
  </div>
  
  </form>
  
</div>
@endsection
