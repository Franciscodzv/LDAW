<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;
class Review extends Model
{
    use HasFactory;

    public static function  createReview($result){

        $response = Http::post(env("API_URL") . "review",[
            'title_id'=>$result['title_id'],
            'description'=>$result['description'],
            'user_id'=>$result['user_id'],

        ] );
       // dd( $response->json());
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }
}
