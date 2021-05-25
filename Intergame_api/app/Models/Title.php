<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;
class Title extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['name','description','genre','image'];
  
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
       
        $title = Title::create([
            'name'=>$result['name'],
            /*'genre'=>$result['genre'],*/
            'description'=>$result['description'],
            'image'=>$result['image']
        ]);
        $id=$title->id;
        $genre=Genre::find($result['genre']);
        return $title->genres()->save($genre);
        
    }

    

   
}
