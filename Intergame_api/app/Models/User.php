<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public static function getUsers(){

        $query = DB::table("users as u")
        ->where("u.id_role",2);
      
        $users = $query->get();

        $result = [];

        foreach($users as $user){

            $userArray = [
                "id" => $user->id,
                "name" => $user->name,
            ];


            $result[$user->id] = $userArray;

        }

        return $result;
    }
    public static function makeAdmin($id){

        $query = DB::table("users as u")
        ->where("u.id",$id)
        ->update(['u.id_role' => 1]) ->get();
        
    }
}
