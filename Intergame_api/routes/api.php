<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


use App\Http\Controllers\ControladorTitulo;

Route::apiResource("titles", ControladorTitulo::class);


use App\Http\Controllers\ControladorAdmin;

Route::apiResource("users", ControladorAdmin::class);

use App\Http\Controllers\ControladorGeneros;

Route::apiResource("genres", ControladorGeneros::class);

use App\Http\Controllers\ControladorReview;

Route::apiResource("review", ControladorReview::class);


use App\Http\Controllers\ControladorTitulosInteres;

Route::apiResource("registrarTitulosInteres", ControladorTitulosInteres::class);
