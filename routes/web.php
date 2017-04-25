<?php

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

Route::group(['prefix' => 'clientes'], function () {

    Route::get('/', 'ClientController@listar')->name('clientes.listar');
    Route::get('/criar', 'ClientController@criar')->name('clientes.criar');;
    Route::post('/save', 'ClientController@save')->name('clientes.salvar');;

});

Route::group(['prefix' => 'processos'], function () {

    Route::get('/', 'ProcessController@listar')->name('processos.listar');
    Route::get('/criar', 'ProcessController@criar')->name('processos.criar');;
    Route::post('/save', 'ProcessController@save')->name('processos.salvar');;

});
