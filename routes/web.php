<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', 'App\Http\Controllers\LoginController@login') -> name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@logar') -> name('login');
Route::get('/logout', 'App\Http\Controllers\LoginController@deslogar') -> name('deslogar');



Route::get('/', 'App\Http\Controllers\produtoController@listarHome') -> name('home') ;

Route::post('/roedor/cadastro', 'App\Http\Controllers\RoedorController@adicionar') -> middleware('App\Http\Middleware\CheckAuth') ->name("roedor.cadastro");
Route::get('/roedor/cadastro', 'App\Http\Controllers\RoedorController@pagina')  -> middleware('App\Http\Middleware\CheckAuth')->name("roedor.view");
Route::get('/roedor/alterar', 'App\Http\Controllers\RoedorController@listar')  -> middleware('App\Http\Middleware\CheckAuth')->name("roedor.listar");
Route::put('/roedor/alterar', 'App\Http\Controllers\RoedorController@alterar') -> middleware('App\Http\Middleware\CheckAuth') ->name("roedor.alterar");
Route::delete('/roedor/alterar', 'App\Http\Controllers\RoedorController@deletar')-> middleware('App\Http\Middleware\CheckAuth')  ->name("roedor.remover");

Route::post('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@adicionar') -> middleware('App\Http\Middleware\CheckAuth') ->name("categoria.cadastro");
Route::get('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@pagina') -> middleware('App\Http\Middleware\CheckAuth')->name("categoria.view");
Route::get('/categoria/alterar', 'App\Http\Controllers\CategoriaController@listar') -> middleware('App\Http\Middleware\CheckAuth') ->name("categoria.listar");
Route::put('/categoria/alterar', 'App\Http\Controllers\CategoriaController@alterar') -> middleware('App\Http\Middleware\CheckAuth') ->name("categoria.alterar");
Route::delete('/categoria/alterar', 'App\Http\Controllers\CategoriaController@deletar')-> middleware('App\Http\Middleware\CheckAuth') ->name("categoria.remover");


Route::get('/usuario/cadastro', function () {   
    return view('cadUsuario');
}) -> name("cadastraUsuario");

Route::post('/usuario/cadastro', 'App\Http\Controllers\UsuarioController@cadastrar') -> name('criaUsuario');

Route::get('/produto/listar/', 'App\Http\Controllers\ProdutoController@listarProdutoPorEspecie') -> name('produto.listar.especie');

Route::get('/produto/cadastro', 'App\Http\Controllers\ProdutoController@pagina') -> middleware('App\Http\Middleware\CheckAuth') -> name("produto.view");
Route::post('/produto/cadastro', 'App\Http\Controllers\ProdutoController@adicionar') -> middleware('App\Http\Middleware\CheckAuth') ->name("produto.cadastro");

Route::get('/produto/alterar', 'App\Http\Controllers\ProdutoController@listar')  -> middleware('App\Http\Middleware\CheckAuth') ->name("produto.listar");
Route::put('/produto/alterar', 'App\Http\Controllers\ProdutoController@alterar') -> middleware('App\Http\Middleware\CheckAuth') ->name("produto.alterar");
Route::delete('/produto/alterar', 'App\Http\Controllers\ProdutoController@deletar')  -> middleware('App\Http\Middleware\CheckAuth') ->name("produto.remover");





