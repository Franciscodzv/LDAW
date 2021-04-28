<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Intergame') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/8b8c378df2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Intergame') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto d-flex">
                        <li class="pr-4 ">
                            <button type="button" class="btn btn-secondary" >REGISTRAR JUEGO</button>
                        </li>
                        <li class="pr-4"> 
                            <button type="button" class="btn btn-info " style="color:white;" >MIS JUEGOS</button>
                        </li>
                        <li class="pr-4 d-flex flex-row align-items-center ">
                            <i class="far fa-bell " style="font-size:20px;"></i>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>


            </div>
        </nav>
        <nav class="navbar  mt-5">
            <div class="container-fluid justify-content-center ">
                <form class="d-flex">
                <input class="form-control form-control-lg  col-sm-12 me-2" type="search" placeholder="Mario Bros..." aria-label="Search">
                <button class="btn btn-success ml-4 btn-lg" type="submit">Buscar</button>
                </form>
            </div>
        </nav>


    <div class="container">
        <div class="row pt-5 flex">

        
            <div class="col-4">
                <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/10/halo-5-2111873.jpg?itok=nBQ5jpKU" class="w-100" alt="...">
                <div class="card-body ">
                    <p class="card-text text-center ">Halo 5: Guardians</p>
                </div>
            </div>
           
        </div>
    </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
