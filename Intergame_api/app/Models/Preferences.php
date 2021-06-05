<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class Preferences extends Model
{
    use HasFactory;
    public $table="preferences"; 
    public $timestamps = false;
    protected $fillable=['title_id','user_id'];

    public function title(){
        return $this->belongsTo(Title::class);
    }

    public static function createTitulosInteres($result){
       
       //dd($result);
       foreach($result['title_id'] as $id){
        $resultado=Preferences::create([
            'title_id'=>$id,
            'user_id'=>$result['user_id']
        ]);
       }
        return 1;
        
    }
}
