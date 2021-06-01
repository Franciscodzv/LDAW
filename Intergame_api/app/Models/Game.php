<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;
class Game extends Model
{
    use HasFactory;
    public $table="games"; 
    public $timestamps = false;
    protected $fillable=['condition','title_id','user_id'];
    

    public function titles()
    {
        return $this->hasMany(Title::class);
    }
    public static function createGame($result){
      
        $game = Game::create([
            'condition'=>$result['condition'],
            'title_id'=>$result['title_id'],
            'user_id'=>1
        ]);
        return 1;
    }
}
