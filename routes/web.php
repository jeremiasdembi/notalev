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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/parametrizacao/perfil', 'parametrizacao/perfil')->name('perfil');
Route::view('/parametrizacao/utilizador', 'parametrizacao/utilizador')->name('utilizador');
Route::view('/parametrizacao/taxa', 'parametrizacao/taxa')->name('taxa');
Route::view('/parametrizacao/servicos', 'parametrizacao/servicos')->name('servicos');
Route::view('/gestaocliente/gestao_subconta', 'gestaocliente/gestao_subconta')->name('gestao_subconta');
Route::view('/gestaocliente/transferencia', 'gestaocliente/transferencia')->name('transferencia');