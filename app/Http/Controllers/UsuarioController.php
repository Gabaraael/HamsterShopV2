<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastrar(Request $request)
    {   
        $usuario = new Usuario();
        
        $usuario -> nome = $request -> nome;
        $usuario -> email = $request -> email;
        $usuario -> senha = $request -> senha;
        $usuario -> telefone = $request -> telefone;
        $usuario -> flg_admin = $request -> flg_admin;
     
        $usuario -> save();        
        session()->put('logado', true);
        session()->put('login', $usuario -> nome);
        session()->put('email', $usuario -> email);

        return view('home');
    }
}

