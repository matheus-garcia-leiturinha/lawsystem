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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () { return view('welcome'); })->name('welcome');
});

Route::group(['middleware' => 'auth','prefix' => 'clientes'], function () {

    Route::get('/', 'ClientController@listar')->name('clientes.listar');
    Route::get('/criar', 'ClientController@criar')->name('clientes.criar');
    Route::get('/editar/{id}', 'ClientController@editar')->name('clientes.editar');
    Route::get('/deletar/{id}', 'ClientController@deletar')->name('clientes.deletar');
    Route::post('/save', 'ClientController@save')->name('clientes.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'processos'], function () {

    Route::get('/', 'ProcessController@listar')->name('processos.listar');
    Route::get('/criar', 'ProcessController@criar')->name('processos.criar');
    Route::get('/editar/{id}', 'ProcessController@editar')->name('processos.editar');
    Route::get('/deletar/{id}', 'ProcessController@deletar')->name('processos.deletar');
    Route::post('/save', 'ProcessController@save')->name('processos.salvar');
});

Route::group(['middleware' => 'auth','prefix' => 'advogados'], function () {

    Route::get('/', 'AdvocatesController@listar')->name('advogados.listar');
    Route::get('/criar', 'AdvocatesController@criar')->name('advogados.criar');
    Route::get('/editar/{id}', 'AdvocatesController@editar')->name('advogados.editar');
    Route::get('/deletar/{id}', 'AdvocatesController@deletar')->name('advogados.deletar');
    Route::post('/save', 'AdvocatesController@save')->name('advogados.salvar');

});


Route::group(['middleware' => 'auth','prefix' => 'tribunais'], function () {

    Route::get('/', 'TribunalController@listar')->name('tribunais.listar');
    Route::get('/criar', 'TribunalController@criar')->name('tribunais.criar');
    Route::get('/editar/{id}', 'TribunalController@editar')->name('tribunais.editar');
    Route::get('/deletar/{id}', 'TribunalController@deletar')->name('tribunais.deletar');
    Route::post('/save', 'TribunalController@save')->name('tribunais.salvar');

});


Route::group(['middleware' => 'auth','prefix' => 'varas'], function () {

    Route::get('/', 'VaraController@listar')->name('varas.listar');
    Route::get('/criar', 'VaraController@criar')->name('varas.criar');
    Route::get('/editar/{id}', 'VaraController@editar')->name('varas.editar');
    Route::get('/deletar/{id}', 'VaraController@deletar')->name('varas.deletar');
    Route::post('/save', 'VaraController@save')->name('varas.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'contrarios'], function () {

    Route::get('/', 'ContrarioController@listar')->name('contrarios.listar');
    Route::get('/criar', 'ContrarioController@criar')->name('contrarios.criar');
    Route::get('/editar/{id}', 'ContrarioController@editar')->name('contrarios.editar');
    Route::get('/deletar/{id}', 'ContrarioController@deletar')->name('contrarios.deletar');
    Route::post('/save', 'ContrarioController@save')->name('contrarios.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'pericias'], function () {

    Route::get('/', 'ExpertiseController@listar')->name('pericias.listar');
    Route::get('/criar', 'ExpertiseController@criar')->name('pericias.criar');
    Route::get('/editar/{id}', 'ExpertiseController@editar')->name('pericias.editar');
    Route::get('/deletar/{id}', 'ExpertiseController@deletar')->name('pericias.deletar');
    Route::post('/save', 'ExpertiseController@save')->name('pericias.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'depositos'], function () {

    Route::get('/', 'DepositoController@listar')->name('depositos.listar');
    Route::get('/criar', 'DepositoController@criar')->name('depositos.criar');
    Route::get('/editar/{id}', 'DepositoController@editar')->name('depositos.editar');
    Route::get('/deletar/{id}', 'DepositoController@deletar')->name('depositos.deletar');
    Route::post('/save', 'DepositoController@save')->name('depositos.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'recolhimentos'], function () {

    Route::get('/', 'RecolhimentoController@listar')->name('recolhimentos.listar');
    Route::get('/criar', 'RecolhimentoController@criar')->name('recolhimentos.criar');
    Route::get('/editar/{id}', 'RecolhimentoController@editar')->name('recolhimentos.editar');
    Route::get('/deletar/{id}', 'RecolhimentoController@deletar')->name('recolhimentos.deletar');
    Route::post('/save', 'RecolhimentoController@save')->name('recolhimentos.salvar');

});

Route::group(['middleware' => 'auth','prefix' => 'pedidos'], function () {

    Route::get('/', 'PedidoController@listar')->name('pedidos.listar');
    Route::get('/criar', 'PedidoController@criar')->name('pedidos.criar');
    Route::get('/editar/{id}', 'PedidoController@editar')->name('pedidos.editar');
    Route::get('/deletar/{id}', 'PedidoController@deletar')->name('pedidos.deletar');
    Route::post('/save', 'PedidoController@save')->name('pedidos.salvar');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logout');
