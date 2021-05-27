<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Roles_Permisos extends Model
{
    public static function getRol($email){

        $token = session('token');

        $response = Http::withToken($token)->post(env("API_URL") . "rol",[
            'email' => $email,
        ]);

        return ($response->status() == 200) ? $response->json() : "";
    }
}
