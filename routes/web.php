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

Route::get('/', function () {   
    return view('home');
});
Route::get('/login', function () {   
    return view('login');
});


Route::get('/roedor/cadastro', function () {   
    return view('cadRoedor');
});

Route::post('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@adicionar')->name("categoria.cadastro");
Route::get('/categoria/cadastro', 'App\Http\Controllers\CategoriaController@pagina')->name("categoria.listar");

Route::get('/usuario/cadastro', function () {   
    return view('cadUsuario');
});
Route::get('/produto/cadastro', function () {   
    return view('cadProduto');
});


Route::get('/produto/alterar', function () {   
    return view('alterarProduto');
});
Route::get('/categoria/alterar', function () {   
    return view('alterarCategoria');
});
Route::get('/roedor/alterar', function () {   
    return view('alterarRoedor');
});

