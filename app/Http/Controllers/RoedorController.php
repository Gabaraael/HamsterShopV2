<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roedor;
use App\Models\Produto;

class RoedorController extends Controller
{
   //ir nas rotas
   function pagina() {
    return view('cadRoedor');
}

function adicionar(Request $request) {

    $roedor = new Roedor();
    $roedor->especie = $request->input('especie');
    $roedor->save();
    return redirect('/roedor/cadastro');
     //Retornar mensagem de sucesso
}

function alterar(Request $request) {
    $roedor = Roedor::find($request->input('roedor'));
   
    $roedor->especie = $request->input('especie');
    $roedor->save();

    return redirect('/roedor/alterar') -> with('alerta-info', 'Alterado com sucesso');
    //Retornar mensagem de sucesso
}

function listar() {
    
    $roedor = Roedor::orderBy('especie')->get();
    
    return view('alterarRoedor', compact('roedor'));
  }

  function deletar(Request $request) {
    $roedor = Roedor::find($request->input('roedor'));

    $produtoExists = Produto::where('roedor_id', $roedor -> id)->exists();

    if(  $produtoExists) {
        return redirect('/roedor/alterar') -> with('alerta-danger', 'Existe um produto com essa categoria');
    } else {
        $roedor->delete();
        return redirect('/roedor/alterar') -> with('alerta-info', 'Removido com sucesso');
    }
}
}
