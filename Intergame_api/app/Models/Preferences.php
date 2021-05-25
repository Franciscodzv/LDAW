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
    protected $fillable=['id_title','id_user'];
    public static function createTitulosInteres($result){
       
       
       foreach($result as $id){
        $resultado=Preferencia::create([
            'id_title'=> $id,
            'id_user'=>1//rbac
        ]);
       }
        return 1;
        
    }
}
