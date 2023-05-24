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
        if ($request->input('id') == 0) {
            $categoria = new Categoria();
        } else {
          $categoria = Categoria::find($request->input('id'));
        }
        $categoria->save();
        return redirect('/categoria/cadastro');
    }

    function editar($id) {
        $categoria = Categoria::find($id);
        return view('alterarCategoria', compact('categoria'));
    }

    public function deletar($id)
    {
        $categoria = Carro::find($id);
        $categoria->delete();

        return redirect('/home');
    }

}
