<?php
namespace App\Models;
use Illuminate\Support\Facades\Http;

class CreateUser{

    public static function register($email, $password, $name){


        $response = Http::post(env("API_URL") . "register",[
            'email' => $email,
            'password' => $password,
            'name' => $name,
        ]);
        return ($response->status() == 200);
    }
}