<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;

class Usuario extends Model
{
    use HasFactory;

    public static function getUsers(){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::get(env("API_URL") . "users");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }
    public static function  makeAdmin($id){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::put(env("API_URL") . "users".  "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }

   
}
