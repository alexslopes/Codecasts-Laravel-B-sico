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
   return 'Seja bem vindo a curso Laravel básico com codecasts!';
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('clientes', ['as' => 'customer.index', 'uses' => 'CustomerController@index']);
    Route::get('cliente/{id}', ['as' => 'customer.get', 'uses' => 'CustomerController@get']);
    Route::post('cliente', ['as' => 'customer.create', 'uses' => 'CustomerController@create']);
    Route::put('cliente/{id}', ['as' => 'customer.update', 'uses' => 'CustomerController@update']);
    Route::delete('cliente/{id}', ['as' => 'customer.delete', 'uses' => 'CustomerController@delete']);
});

