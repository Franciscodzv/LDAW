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


use App\Http\Controllers\TitleController;

Route::apiResource("titles", TitleController::class);


use App\Http\Controllers\AdminController;

Route::apiResource("users", AdminController::class);

use App\Http\Controllers\GenreController;

Route::apiResource("genres", GenreController::class);

use App\Http\Controllers\ReviewController;

Route::apiResource("review", ReviewController::class);


use App\Http\Controllers\InterestController;

Route::apiResource("registrarTitulosInteres", InterestController::class);
