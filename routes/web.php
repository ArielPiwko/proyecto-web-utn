<?php

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

//Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
//Route::resource('login', \App\Http\Controllers\LoginController::class)
//->only(['index','store','destroy']);

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);
Route::resource('profesores', \App\Http\Controllers\ProfesoresController::class);
Route::resource('entrenadores', \App\Http\Controllers\EntrenadoresController::class);

Route::get('/registro', [\App\Http\Controllers\RegistroController::class, 'index'])->name('registro');

Route::get('/productos', [\App\Http\Controllers\ProductosController::class, 'productos'])->name('productos');
Route::get('/producto/{id}', [\App\Http\Controllers\ProductosController::class, 'mostrar'])->name('test_show');
Route::get('/prueba', [\App\Http\Controllers\ProductosController::class, 'prueba'])->name('test_prueba');


Route::resource('clases', \App\Http\Controllers\ClasesController::class);
Route::get('/clases.anotarse/{id}', [\App\Http\Controllers\ClasesController::class, 'anotarse'])->name('clases.anotarse');

Route::resource('rutinas', \App\Http\Controllers\RutinaController::class);

Route::get('/rutina/lunes', [\App\Http\Controllers\RutinaController::class, 'lunes'])->name('lunes');
Route::get('/rutina/miercoles', [\App\Http\Controllers\RutinaController::class, 'miercoles'])->name('miercoles');
Route::get('/rutina/viernes', [\App\Http\Controllers\RutinaController::class, 'viernes'])->name('viernes');


Route::resource('login', \App\Http\Controllers\LoginController::class)->only(['index','store'])->name('index','login');
Route::post('logout', [\App\Http\Controllers\LoginController::class, 'destroy'])->name('logout');
