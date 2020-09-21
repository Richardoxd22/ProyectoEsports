<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\eventosController;
use App\Http\Controllers\comentariosController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/usuarios', UsuariosController::class);
Route::get('/usuarios/{id}/confirmDelete', [UsuariosController::class, 'confirmDelete']);

Route::resource('/noticias', noticiasController::class);
Route::get('/noticias/{id}/confirmDelete', [noticiasController::class, 'confirmDelete']);

Route::resource('/comentarios', comentariosController::class);
Route::get('/comentarios/{id}/confirmDelete', [comentariosController::class, 'confirmDelete']);

Route::resource('/eventos', eventosController::class);
Route::get('/eventos/{id}/confirmDelete', [eventosController::class, 'confirmDelete']);