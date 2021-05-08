<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;

class Titulo extends Model
{
    use HasFactory;

    public static function getTitles(){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::get(env("API_URL")."titles");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }

  /*  public static function getTitle($id){

        $response = Http::get(api_route('titles') . "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }*/




}
