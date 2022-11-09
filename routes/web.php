<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProcesasController;
use App\Http\Controllers\PizzaController;
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
    return view('principal');
});

Route::get('/Pizza', function () {
    return view('../pedido/Pizza');
});


Route::post('/inserta', [PizzaController:: class, 'store'] )->name('guarda') ;

Route::resource('Pizza', 'App\Http\Controllers\PizzaController');

