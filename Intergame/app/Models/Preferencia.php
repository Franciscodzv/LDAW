<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;
class Preferencia extends Model
{
    use HasFactory;

    public static function  createTitulosInteres($result){
       
        $response = Http::post(env("API_URL") . "registrarTitulosInteres",[
            'usedr_id' => $result['user_id'],
            'title_id'=>$result['title_id'],
        ] );
      
     // dd($result );
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }
}
