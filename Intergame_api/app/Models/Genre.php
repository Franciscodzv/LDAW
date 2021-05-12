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

    public function getGenre($id){

        //$books = self::all();
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

    public function getGenres(){

        //$books = self::all();
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
