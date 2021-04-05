<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Integrantes</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>


  <div class="container">
      <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{route('index') }}">InterGame</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     
    </nav>
  <h1 class="d-flex justify-content-center">Integrantes </h1> 
  <br>
  
  <div class="row">
      <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/cadena.jpeg')}}" alt="Eduardo Cadena" height="400px">
      <div class="card-body">
        <h5 class="card-title"> Eduardo Cadena Bernal A01704641</h5>
        <p class="card-text">Tengo experiencia usando bootstrap, materialize,he desarrollado algunas landing page con PHP y Javascript, tengo conocimiento muy basico en angular</p>
        
      </div>
    </div>

    <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/paco.jpg')}}" alt="Francisco Diaz" height="400px">
      <div class="card-body">
        <h5 class="card-title">Francisco Agustin Diaz A01204695	</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       
      </div>
    </div>

    <div class="card col-sm" style="width: 18rem;">
      <img class="card-img-top" src="{{URL::asset('/image/matute.jpg')}}" alt="Alberto Matute" height="400px">
      <div class="card-body">
        <h5 class="card-title">Alberto Matute Beltran A01704584</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
      </div>
    </div>
   
    </div>

  </div>
  <script src="js/scripts.js"></script>

</body>
</html>