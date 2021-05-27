<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RolController extends Controller {

    public function index(Request $request){

        $email = $request->email;
        
        $rol = DB::table('users')->where('email', $email)->value('role_id');

        return $rol;

    } 

}