<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    //ir nas rotas
    function pagina() {
        return view('cadCategoria');
    }

    function adicionar(Request $request) {
       
        $categoria = new Categoria();
        $categoria = Categoria::find($request->input('id'));
     
        $categoria->nome = $request->input('nome');
        $categoria->save();
        return redirect('/categoria/cadastro');
         //Retornar mensagem de sucesso
    }

    function alterar(Request $request) {
        $categoria = Categoria::find($request->input('categoria'));
       
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('/categoria/alterar');
        //Retornar mensagem de sucesso
    }

    function listar() {
        
        $categoria = Categoria::orderBy('nome')->get();
        
        return view('alterarCategoria', compact('categoria'));
      }

    public function deletar($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect('/home');
         //Retornar mensagem de sucesso
    }

}
