<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class CategoriaController extends Controller
{

    //ir nas rotas
    function pagina() {
        return view('cadCategoria');
    }

    function adicionar(Request $request) {
       
        $categoria = new Categoria();
        $categoria->nome = $request->input('nome');
        $categoria->save();
        return redirect('/categoria/cadastro') -> with('alerta', 'Cadastrado com sucesso');
         //Retornar mensagem de sucesso
    }

    function alterar(Request $request) {
      
        $categoria = Categoria::find($request->input('categoria'));
       
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('/categoria/alterar') -> with('alerta-info', 'Alterado com sucesso');;
        //Retornar mensagem de sucesso
    }

    function deletar(Request $request) {
        $categoria = Categoria::find($request->input('categoria'));

        $produtoExists = Produto::where('categoria_id', $categoria -> id)->exists();

        if(  $produtoExists) {
            return redirect('/categoria/alterar') -> with('alerta-danger', 'Existe um produto com essa categoria');;
        } else {
            $categoria->delete();
            return redirect('/categoria/alterar') -> with('alerta-info', 'Removido com sucesso');
        }
    }

    function listar() {
        
        $categoria = Categoria::orderBy('nome')->get();
        
        return view('alterarCategoria', compact('categoria'));
      }
}
