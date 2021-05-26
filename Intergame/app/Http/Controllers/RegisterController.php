<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreateUser;
use App\Models\Authentication;
use App\Models\Roles_Permisos;
use App\Models\Usuario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    
    public function create(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'name' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        $name = $request->name;

        //true si ya existe ese email en la db
        if(Roles_Permisos::getRol($email) != ""){
            return redirect('/register')->with('status', 'La cuenta con el correo ingresado ya existe');
        }
        else{
        if (CreateUser::register($email, $password, $name)) {

            $device = $request->header('User-Agent', 'default');

            if ($token = Authentication::getToken($email, $password, $device)) {
                $request->session()->regenerate();
                $request->session()->regenerate();

                $request->session()->put('token', $token['token']['plainTextToken']);
                $rol = Roles_Permisos::getRol($email);

                $id = Usuario::getId($email);
                
                $request->session()->put('rol', $rol);

                $request->session()->put('email', $email);

                $request->session()->put('id', $id);

                return redirect('/');
            }
        }
    }

        return redirect('/register')->with('status', 'fallo al iniciar sesion');
        
    }
}
