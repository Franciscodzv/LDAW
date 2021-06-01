<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;

class Offer extends Model
{
    use HasFactory;
     
    public static function  createOffer($result){

        $response = Http::post(env("API_URL") . "offers",[
            'gameOffer_id'=>$result['gameOffer_id'],
            'gameOwn_id'=>$result['gameOwn_id']
        ] );
      
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }

     public static function getNotifications($id){

        $response = Http::get(env("API_URL") . "notifications" . "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }


    public static function deleteOffer($id){

        $response = Http::delete(env("API_URL") . "notifications" . "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }
}
