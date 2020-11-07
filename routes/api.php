<?php

use App\Http\Controllers\comentariosController;
use App\Http\Controllers\eventosController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/eventos', eventosController::class);

Route::resource('/usuarios', UsuariosController::class);

Route::resource('/noticias', noticiasController::class);

Route::resource('/comentarios', comentariosController::class);
