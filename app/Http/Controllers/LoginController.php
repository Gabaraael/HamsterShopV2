<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
 
    public function login()
    {        

        return view('auth');
    }
    
    public function logar(Request $request)
    {
      
        $usuario = Usuario::where('email', $request ->input('email'))->first();
      
        if($usuario && $usuario -> senha == md5($request -> input('senha'))) {
            session()->put('logado', true);
            session()->put('login', $usuario -> nome);
            session()->put('email', $usuario -> email);
          
            return  redirect()-> route('home') -> with('alerta', 'Login realizado com sucesso');
        }  else {
            return redirect()-> route('login') -> with('alerta', 'Usuario ou senha incorretos');
        }
     
    }


    public function deslogar()
    {
        session()->put('logado', false);
        session()->put('login', '');
        session()->put('email', '');
        return redirect()-> route('login');
    }
}
