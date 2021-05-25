<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    //Un rol puede tener muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }

    //Un rol puede tener muchos privilegios N a N
    public function privileges(){
        return $this->belongsToMany(Privilege::class,"privileges_roles");
    }
}
