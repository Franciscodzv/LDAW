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
                        <li class="nav-item pr-4">
                                        <a class="btn btn-outline-primary" href="weather">Weather</a>
                        </li>
                        <!-- Authentication Links -->
                        @if (!(session('token')))
                                <li class="nav-item pr-3">
                                    <a class="btn btn-outline-secondary" href="{{ url('/login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item pr-4">
                                    <a class="btn btn-outline-primary" href="{{ url('/register') }}">{{ __('Register') }}</a>
                                </li>
                        @endif
                        @if (session('token'))
                            <li class="pr-4 ">
                            <button type="button" class="btn btn-outline-success" onclick="window.location.href='/games'">Registrar Juego</button>
                            </li>
                            <li class="pr-4"> 
                                <button type="button" class="btn btn-outline-primary" onclick="window.location.href='/TitulosInteres'">Mis preferencias</button>
                            </li>
                            @if(session('rol') == 1)
                            <li class="pr-4 ">
                                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='/registrarTitulo'">Registrar T??tulo</button>
                            </li>
                            
                            <li class="pr-4 ">
                                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='/editarTitulos'">Eliminar Titulos</button>
                            </li>
                          
                            <li class="pr-4 ">
                                <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='/users'">Alta Administrador</button>
                            </li>
                            @endif
                            <li class="pr-4 d-flex flex-row align-items-center ">
                                <button type="button" class="far fa-bell" onclick="window.location.href='/notifications/{{session('id')}}'" style="font-size:20px;"></button>
                            </li>
                            <li class="pr-4 ">
                                <a href="{{ url('/logout') }}" class="btn btn-outline-secondary" >{{ __('logout') }}</a>
                            </li>
                        @endif
                    </ul>
                </div>


            </div>
        </nav>
        
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
