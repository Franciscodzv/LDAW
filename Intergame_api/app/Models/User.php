<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Importar la facade para la clase DB
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable 
{
    use HasFactory, Notifiable, HasApiTokens;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //Un usuario puede tener solo un rol
    public function role(){
        return $this->belongsTo(Rol::class);
    }
    
    public function review(){
        return $this->belongsTo(Review::class);
    }

    /*************************
        MÉTODOS DE LA CLASE
    *************************/

    public function getPrivilegesList(){

        $privileges = $this->role->privileges->pluck("name");

        return $privileges;

    }


    public static function getGuest(){

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
        ->update(['u.id_role' => 1]);
        
    }

    public static function login($email, $password){

        $user = DB::table("users as u")
        ->where([
            ['u.email', '=', $email],
            ['u.password', '=', Hash::make($password)],
        ])->get();

        return $user->createToken('token-name', [$user->role->privileges->pluck("name")])->plainTextToken;
   
    }
}
