<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;
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

    public function games()
    {
        return $this->belongsTo(Game::class);
    }
    public function preference()
    {
        return $this->hasMany(Preference::class);
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
       // $result[$title->id+1] = Http::get(env("api.openweathermap.org/data/2.5/weather?q=queretaro&appid=dd21f0e46cadbf0f20cc24a22e2aca97"));
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
