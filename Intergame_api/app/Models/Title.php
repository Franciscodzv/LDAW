<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Title extends Model
{
    use HasFactory;

 

  /*  public function genres(){
        return $this->belongsToMany(Genre::class);
    }*/

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


}
