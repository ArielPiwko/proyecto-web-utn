<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\InicioController::class, 'inicio'])->name('index');

//Route::resource('usuarios',\App\Http\Controllers\UsuariosController::class);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'inicio'])->name('login');
//Route::resource('login', \App\Http\Controllers\LoginController::class)
//->only(['index','store','destroy']);

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);
Route::resource('profesores', \App\Http\Controllers\ProfesoresController::class);

Route::get('/productos', [\App\Http\Controllers\ProductosController::class, 'productos'])->name('test_inicio');
Route::get('/producto/{id}', [\App\Http\Controllers\ProductosController::class, 'mostrar'])->name('test_show');
Route::get('/prueba', [\App\Http\Controllers\ProductosController::class, 'prueba'])->name('test_prueba');