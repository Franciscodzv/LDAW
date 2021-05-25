<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;

    public static function getGuests(){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::get(env("API_URL") . "users");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }
    public static function  makeAdmin($id){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::put(env("API_URL") . "users".  "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }

        /*
    NOTE: Propiedades que necesitamos del usuario
    */
    public $email = null;
    public $name = null;
    public $role = null;
    public $privileges = [];
    public $token = null;

    /*********************************************
    NOTE: Métodos desarrollados para este modelo
    **********************************************/

    public function revokeToken(){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($this->token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(api_route("logout"));

        //dd($response->body());

        return $response->successful();

    }

    public function hasPrivilege($privilege){

        if(!empty($this->privileges)){

            return in_array($privilege,$this->privileges);

        }

        return false;

    }

    public function isAdmin(){
        return $this->role === "admin";
    }


    /*****************************************************
    NOTE: Métodos estáticos desarrollados para este modelo
    ******************************************************/

    //Solicita el usuario logueado a la API usando el token registrado en la sesión
    public static function requestUser($token){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(api_route("user"));

        //dd($response->body());

        if($response->successful()){
            //Crear la instancia del usuario y devolverla
            $userData = $response->json();

            $user = new User;

            $user->email = $userData["email"];
            $user->name = $userData["name"];
            $user->role = $userData["rol"];
            $user->privileges = $userData["privileges"];
            $user->token = $token;

            return $user;

        }

        return null;

    }

     /*********************************************************************
    NOTE: métodos que se tienen que implementar debido a "Authenticatable"
    **********************************************************************/

    public function getAuthIdentifierName(){
        return "token";
    }

    public function getAuthIdentifier(){
        return $this->token;
    }

    public function getAuthPassword(){
        return $this->token;
    }

    public function getRememberToken(){
        return null;
    }

    public function setRememberToken($value){

    }

    public function getRememberTokenName(){
        return null;
    }


   
}
