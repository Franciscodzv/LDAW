<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


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
use App\Http\Controllers\UserController;

Route::apiResource("registrarTitulosInteres", InterestController::class);

<<<<<<< HEAD
//rbac
Route::post('/register', [UserController::class, "register"]);

use App\Models\User;
//tokens
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return ["token" => $user->createToken($request->device_name)];
});


use App\Http\Controllers\RolController;
Route::middleware('auth:sanctum')->post('/rol', [RolController::class, "index"]);

use App\Http\Controllers\Usuario;
Route::middleware('auth:sanctum')->post('/id', [UserController::class, "index"]);
=======
use App\Http\Controllers\GameController;

Route::apiResource("games", GameController::class);
>>>>>>> a91d2ff040bc2c24e3f61a23c0603add0d531062
