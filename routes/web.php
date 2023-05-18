<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('/', [UserController::class,'index'])->name('user.index');

Route::get('/pedidos',[PedidoController::class,'index'])->name('pedido.index');
Route::post('/pedidos',[PedidoController::class,'store'])->name('pedido.store');
Route::get('/pedidos/create',[PedidoController::class,'create'])->name('pedido.create');

Route::get('/produtos',[ProdutoController::class,'index'])->name('produto.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
