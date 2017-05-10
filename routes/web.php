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
    Route::get('/criar', 'ClientController@criar')->name('clientes.criar');
    Route::get('/editar/{id}', 'ClientController@editar')->name('clientes.editar');
    Route::get('/deletar/{id}', 'ClientController@deletar')->name('clientes.deletar');
    Route::post('/save', 'ClientController@save')->name('clientes.salvar');

});

Route::group(['prefix' => 'processos'], function () {

    Route::get('/', 'ProcessController@listar')->name('processos.listar');
    Route::get('/criar', 'ProcessController@criar')->name('processos.criar');
    Route::post('/save', 'ProcessController@save')->name('processos.salvar');
});

Route::group(['prefix' => 'advogados'], function () {

    Route::get('/', 'AdvocatesController@listar')->name('advogados.listar');
    Route::get('/criar', 'AdvocatesController@criar')->name('advogados.criar');
    Route::get('/editar/{id}', 'AdvocatesController@editar')->name('advogados.editar');
    Route::get('/deletar/{id}', 'AdvocatesController@deletar')->name('advogados.deletar');
    Route::post('/save', 'AdvocatesController@save')->name('advogados.salvar');

});


Route::group(['prefix' => 'tribunais'], function () {

    Route::get('/', 'TribunalController@listar')->name('tribunais.listar');
    Route::get('/criar', 'TribunalController@criar')->name('tribunais.criar');
    Route::get('/editar/{id}', 'TribunalController@editar')->name('tribunais.editar');
    Route::get('/deletar/{id}', 'TribunalController@deletar')->name('tribunais.deletar');
    Route::post('/save', 'TribunalController@save')->name('tribunais.salvar');

});


Route::group(['prefix' => 'varas'], function () {

    Route::get('/', 'VaraController@listar')->name('varas.listar');
    Route::get('/criar', 'VaraController@criar')->name('varas.criar');
    Route::get('/editar/{id}', 'VaraController@editar')->name('varas.editar');
    Route::get('/deletar/{id}', 'VaraController@deletar')->name('varas.deletar');
    Route::post('/save', 'VaraController@save')->name('varas.salvar');

});
