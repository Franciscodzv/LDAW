<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
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

Route::get('/registrarTitulosInteres', function(){
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



Route::get("/",[TitleController::class,"index"]);
Route::resource('titulos', TitleController::class)->except(["index"]);//->middleware('auth');
Route::get('editarTitulos', [TitleController::class,"lista"]);//->middleware('auth');



//rutas admin

Route::resource('users', AdminController::class);//->middleware('auth');

//rutas generos

Route::resource('genres', GenreController::class)->except(["index"]);//->middleware('auth');
Route::get("registrarTitulo",[GenreController::class,"index"]);