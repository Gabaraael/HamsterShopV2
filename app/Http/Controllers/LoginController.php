<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function listar()
    {
    }

    public function login()
    {        

        return view('auth');
    }
    
    public function logar(Request $request)
    {
        $username = $request->input('username');
        $senha = $request->input('password');
        $usuario = Usuario::where('username', $username)->first();

        if ($usuario && password_verify($senha, $usuario->password)) {
            session(['logado' => $usuario]);
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }


    public function deslogar()
    {
        session(['logado' => null]);
        return redirect()->route('login');
    }
}
