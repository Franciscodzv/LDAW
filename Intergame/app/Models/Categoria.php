<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    public static function getGenres(){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::get(env("API_URL") . "genres");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }
}
