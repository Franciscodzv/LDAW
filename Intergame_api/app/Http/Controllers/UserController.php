<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'role_id'=> '2',   
        ]);
    } 

    public function index(Request $request){

        $email = $request->email;
        
        $id = DB::table('users')->where('email', $email)->value('id');

        return $id;

    }
}
