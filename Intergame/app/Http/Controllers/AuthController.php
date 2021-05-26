<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Authentication;
use App\Models\Roles_Permisos;
use App\Models\Usuario;


class AuthController extends Controller 
{
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;
        $device = $request->header('User-Agent', 'default');

        if ($token = Authentication::getToken($email, $password, $device)) {
            
            $request->session()->regenerate();

            $request->session()->put('token', $token['token']['plainTextToken']);

            if ($rol = Roles_Permisos::getRol($email)) {

                $id = Usuario::getId($email);
                
                $request->session()->put('rol', $rol);

                $request->session()->put('email', $email);

                $request->session()->put('id', $id);

                return redirect('/');
            }
        }

        return redirect('/login')->with('error', 'Email o contraseña incorrectos');
    }

    public function logout(Request $request){

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
