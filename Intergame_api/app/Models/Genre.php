<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function titles(){
        return $this->belongsToMany(Title::class, "genres_titles");
    }

    public static function getGenre($id){
        $genres = self::where("title_id", "=", $id);

        $result = [];

        foreach($genres as $genre){

            $genreArray = [
                "id" => $genre->id,
                "name" => $genre->name
            ];


            $result[$genre->id] = $genreArray;

        }

        return $result;

    }

    public static function getGenres(){

        $genres = self::all();

        $result = [];

        foreach($genres as $genre){

            $genreArray = [
                "id" => $genre->id,
                "name" => $genre->name
            ];


            $result[$genre->id] = $genreArray;

        }

        return $result;

    }

}
