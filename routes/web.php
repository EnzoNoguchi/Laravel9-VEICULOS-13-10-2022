<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormCarro;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\editarController;

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

Route::get('/home',[HomeController::class,'mostrar']);

Route::get('/cadastrarCarro',[FormCarro::class,'cadastro']);

Route::get('/ListarCarro',[ListaController::class,'mostrar']);

Route::get('/editarCarro',[editarController::class,'mostrar']);