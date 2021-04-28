@include('header')

  <h1 class="d-flex justify-content-center">Integrantes </h1> 
  <br>
  
  <div class="row">
      <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/cadena.jpeg')}}" alt="Eduardo Cadena" height="400px">
      <div class="card-body">
        <h5 class="card-title"> Eduardo Cadena Bernal A01704641</h5>
        <p class="card-text">Tengo experiencia usando bootstrap, materialize,he desarrollado algunas landing page con PHP y Javascript, tengo conocimiento muy basico en Angular</p>
        
      </div>
    </div>

    <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/paco.jpg')}}" alt="Francisco Diaz" height="400px">
      <div class="card-body">
        <h5 class="card-title">Francisco Agustin Diaz A01204695	</h5>
        <p class="card-text">Tengo experiencia en PHP, HTML, JavaScript y librerías de CSS como Bootstrap, Materialize, además de tener conocimiendo básico de Laravel.</p>
       
      </div>
    </div>

    <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/matute.jpg')}}" alt="Alberto Matute" height="400px">
      <div class="card-body">
        <h5 class="card-title">Alberto Matute Beltran A01704584</h5>
        <p class="card-text">Tengo experiencia con el uso de librerias de css como bootstrap y materialize, mi primera interaccion con los frameworks fue en el bloque 2 con laravel</p>
        
      </div>
    </div>
   
    </div>

@include('footer')
