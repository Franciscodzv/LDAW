<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\WeatherController;
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

Route::get("/",[TitleController::class,"index"]);
Route::resource('titulos', TitleController::class)->except(["index"]);//->middleware('auth');
Route::get('editarTitulos', [TitleController::class,"lista"]);//->middleware('auth');

Route::get('TitulosInteres', [TitleController::class,"listaInteres"]);


//rutas admin

Route::resource('users', AdminController::class);//->middleware('auth');

//rutas generos

Route::resource('genres', GenreController::class)->except(["index"]);//->middleware('auth');
Route::get("registrarTitulo",[GenreController::class,"index"]);


//rutas review

Route::resource('review', ReviewController::class);//->middleware('auth');


Route::resource('registrarTitulosInteres', InterestController::class);//->middleware('auth');


//rbac
Route::get('/register',[RegisterController::class,'index']);//->middleware('guest');
Route::get('/login',[RegisterController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->middleware('guest');
Route::get('/logout',[AuthController::class,'logout'])->name('logout')->middleware('auth');
Route::post('/register',[RegisterController::class,'create'])->middleware('guest');

Route::resource('games', GameController::class);

Route::resource('offers', OfferController::class);

Route::resource('notifications', NotificationsController::class);

Route::resource('weather', WeatherController::class);
