<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\ContratoController;


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

Route::get(
    '/',
    function () {
        return view('layouts/home');
    }
);

Route::get('produtos/{nuProduto}/contratos/{nuContrato}', 'App\Http\Controllers\ContratoController@filtraContrato');
Route::get('produtos/{nuProduto}/contratos/{nuContrato}/saldos', 'App\Http\Controllers\SaldoController@filtraSaldo');
Route::get('produtos/{nuProduto}/contratos/{nuContrato}/parcelas', 'App\Http\Controllers\ParcelaController@filtraParcela');

Route::resource('saldos', SaldoController::class);
Route::resource('parcelas', ParcelaController::class);
