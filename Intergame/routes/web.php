<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
});//->middleware('auth');

Route::group(['middleware' => 'auth'],  function () {
    return view('/home');
    //Route::get('/', [JornadaController::class, 'index'])->name('home');
});

Route::get('/registrarJuego', function(){
    return view('game.registrarJuego');
});

Route::get('/registrarTitulosInteres', function(){
    return view('game.titulosInteres');
});
Route::get('/escribirResenia', function(){
    return view('game.resenia');
});
Route::get('/registrarTitulo', function(){
    return view('game.registrarTitulo');
});
Route::get('/editarTitulos', function(){
    return view('game.editarTitulos');
});
Route::get('/altaAdmin', function(){
    return view('game.altaAdministrador');
});