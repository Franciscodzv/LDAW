<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;
class Juego extends Model
{
    use HasFactory;
    public static function  createGame($result){

        $response = Http::post(env("API_URL") . "games",[
            'title_id'=>$result['title_id'],
            'condition'=>$result['condition']

        ] );
      
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }
}
