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
    return view('auth.login');
});//->name('index');

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

