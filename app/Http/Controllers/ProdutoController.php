<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    //adicionar as rotas
    function pagina() {
        return view('cadProduto');
    }
    
    function adicionar(Request $request) {
        if ($request->input('id') == 0) {
            $produto = new Produto();
        } else {
          $produto = Produto::find($request->input('id'));
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = public_path('images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $produto->image = $imageName;
          }

        $produto->especie = $request->input('especie');
        //terminar de adicionar as variaveis
        $produto->save();
        return redirect('/roedor/cadastro');
         //Retornar mensagem de sucesso
    }
    function alterar(Request $request) {
        $produto = Produto::find($request->input('produto'));
       
        $produto->especie = $request->input('especie');
        //terminar
        $produto->save();
    
        return redirect('/produto$produto/alterar');
        //Retornar mensagem de sucesso
    }
    
    function listar() {
        
        $produto = Produto::orderBy('especie')->get();
        //Arrumar orderby
        
        return view('alterarProduto', compact('produto'));
      }
    
    public function deletar($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    
        return redirect('/home');
         //Retornar mensagem de sucesso
    }
    
}