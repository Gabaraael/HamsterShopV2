<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roedor;

class RoedorController extends Controller
{
   //ir nas rotas
   function pagina() {
    return view('cadRoedor');
}

function adicionar(Request $request) {

    $roedor = new Roedor();
    $roedor = Roedor::find($request->input('id'));

    $roedor->especie = $request->input('especie');
    $roedor->save();
    return redirect('/roedor/cadastro');
     //Retornar mensagem de sucesso
}

function alterar(Request $request) {
    $roedor = Roedor::find($request->input('roedor'));
   
    $roedor->especie = $request->input('especie');
    $roedor->save();

    return redirect('/roedor/alterar');
    //Retornar mensagem de sucesso
}

function listar() {
    
    $roedor = Roedor::orderBy('especie')->get();
    
    return view('alterarRoedor', compact('roedor'));
  }

public function deletar($id)
{
    $roedor = Roedor::find($id);
    $roedor->delete();

    return redirect('/home');
     //Retornar mensagem de sucesso
}
}
