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
Route::view('/gestaocliente/gestaosubconta', 'gestaocliente/gestao_subconta')->name('gestao_subconta');
Route::view('/gestaocliente/gestaoconta', 'gestaocliente/gestao_conta')->name('gestao_conta');
Route::view('/gestaocliente/conversaomoeda', 'gestaocliente/conversao_moeda')->name('conversaomoeda');
Route::view('/gestaocliente/adicionarretirarvalor', 'gestaocliente/adicionar_retirar_valor')->name('adicionarretirarvalor');
Route::view('/parametrizacao/desconto', 'parametrizacao/desconto')->name('desconto');
Route::view('/gestaocliente/transferencia', 'gestaocliente/transferencia')->name('transferencia');
Route::view('/historicotransacao/historicotransacao', 'historicotransacao/historico_transacao')->name('historicotransacao');
Route::view('/operacoesdecaixa/validaroperacoes', 'operacoesdecaixa/validar_operacoes')->name('validaroperacoes');
Route::view('/operacoesdecaixa/finalizarvalidacao', 'operacoesdecaixa/finalizar_validacao_operacao')->name('finalizarvalidacao');
Route::view('/redebinaria/verassociados', 'redebinaria/ver_associados')->name('verassociados');
