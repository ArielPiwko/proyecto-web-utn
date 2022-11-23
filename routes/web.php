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

Route::get('/', [\App\Http\Controllers\InicioController::class, 'inicio']);

//Route::resource('usuarios',\App\Http\Controllers\UsuariosController::class);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'inicio']);
//Route::resource('login', \App\Http\Controllers\LoginController::class)
//->only(['index','store','destroy']);

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);