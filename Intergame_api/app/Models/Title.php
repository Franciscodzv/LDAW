<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;
class Title extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, "genres_titles");
    }

    public static function getAllTitles(){

        //$books = self::all();
        $titles = self::all();

        $result = [];

        foreach($titles as $title){

            $titleArray = [
                "id" => $title->id,
                "name" => $title->name,
                "image" => $title->image   
            ];


            $result[$title->id] = $titleArray;

        }

        return $result;
    }
    public static function createTitle($result){
       DB::table('titles')->insert([
        'name'->$result->name,
        'description'->$result->description,
        'image'->$result->image,
        'genre'->$result->genre,
       ]);
    }
   
}
