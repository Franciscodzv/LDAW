<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTitulo;
use App\Http\Controllers\ControladorAdmin;
use App\Http\Controllers\ControladorGeneros;
use App\Http\Controllers\ControladorReview;
use App\Http\Controllers\ControladorTitulosInteres;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('index');

Route::get('/Integrantes', function () {
    return view('integrantes');
});


Auth::routes();




Route::group(['middleware' => 'auth'],  function () {
    return view('/home');
    //Route::get('/', [JornadaController::class, 'index'])->name('home');
});

Route::get('/registrarTitulo', function(){
    return view('game.registrarJuego');
});

Route::get('/titulosInteres', function(){
    return view('game.titulosInteres');
});
Route::get('/escribirReview', function(){
    return view('game.resenia');
});
Route::get('/registrarJuego', function(){
    return view('game.registrarTitulo');
});
Route::get('/editarTitulos', function(){
    return view('game.editarTitulos');
});
Route::get('/altaAdmin', function(){
    return view('game.altaAdministrador');
});

Route::get('/oferta',function(){
    return view('game.oferta');
});

Route::get('/notificaciones',function(){
    return view('game.notificaciones');
});
//rutas titulos



Route::get("/",[ControladorTitulo::class,"index"]);
Route::resource('titulos', ControladorTitulo::class)->except(["index"]);//->middleware('auth');
Route::get('editarTitulos', [ControladorTitulo::class,"lista"]);//->middleware('auth');

Route::get('TitulosInteres', [ControladorTitulo::class,"listaInteres"]);


//rutas admin

Route::resource('users', ControladorAdmin::class);//->middleware('auth');

//rutas generos

Route::resource('genres', ControladorGeneros::class)->except(["index"]);//->middleware('auth');
Route::get("registrarTitulo",[ControladorGeneros::class,"index"]);


//rutas review

Route::resource('review', ControladorReview::class);//->middleware('auth');


Route::resource('registrarTitulosInteres', ControladorTitulosInteres::class);//->middleware('auth');