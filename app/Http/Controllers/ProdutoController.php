<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roedor;
use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\Produto;

class ProdutoController extends Controller
{
    function pagina() {

        $roedor = Roedor::orderByRaw('id')->get();
        $categoria = Categoria::orderByRaw('id')->get();
        
   
      return view('cadProduto', compact('roedor', 'categoria'));

    }
    
    function adicionar(Request $request) {
        
        $produto = new Produto();   
        $produto->roedor_id = $request->input('roedor_id');
        $produto->categoria_id = $request->input('categoria_id');
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = public_path('images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $produto->image_link = $imageName;
            
          }
          
        $estoque = new Estoque();
        $estoque->quantidade = $request->input('quantidade');
        $estoque->save();
        $produto->estoque_id = $estoque->id;

        $produto->save();
        return redirect('/produto/cadastro');
         //Retornar mensagem de sucesso
    }
    function alterar(Request $request) {
        $produto = Produto::find($request->input('produto'));

        $produto->categoria_id = $request->input('categoria_id');
        $produto->roedor_id = $request->input('roedor_id');
        
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        

        $estoque = Estoque::find($produto -> estoque_id);
        $estoque->quantidade = $request->input('quantidade');
        $estoque->save();

        $produto->estoque_id = $estoque->id;
        var_dump($request-> input('nome'));
       
        $produto->save();
    
        return redirect('/produto/alterar');
        //Retornar mensagem de sucesso
    }
    
    function listar() {
        
      $roedor = Roedor::orderByRaw('id')->get();
      $categoria = Categoria::orderByRaw('id')->get();
      $produto = Produto::orderBy('nome')->get();       
      return view('alterarProduto', compact('produto', 'categoria', 'roedor'));

    }

    function listarHome(){
      $produto = Produto::orderBy('nome')->get();  

      return view('home', compact('produto'));
    }

    function listarProduto(Request $request){
      
       $especie = $request->input('especie');
       $roedor = Roedor::where('especie', $especie) -> first();       
       $produto = Produto::where('roedor_id', $roedor -> id) -> get();

      
      return view('home', compact('produto'));
    }
    
    
    public function deletar($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    
        return redirect('/home');
         //Retornar mensagem de sucesso
    }
    
}