<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@show']);

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);

/*Post Login*/
Route::post('/login-agencia', ['as' => 'login-agencia', 'uses' => 'HomeController@login']);

/*Post Admi Agencia Turistica*/
Route::post('/upagencia', ['as' => 'upagencia', 'uses' => 'HomeController@upAgencia']);

/*Route get listado paqete turistico*/
Route::get('/paquetes-turisticos', ['as' => 'paquetes-turisticos', 'uses' => 'HomeController@showPaquetes']);

/*Route get Administracion de paquetes*/
Route::get('/admi-paquete-turistico', ['as'=>'admi-paquete-turistico', 'uses' => 'HomeController@showAdmiPaquetes']);

/*Post Admi Paquete Turistico*/
Route::post('/save-paquete-turistico', ['as' => 'save-paquete-turistico', 'uses' => 'HomeController@savePaquete']);


/*Route Get JSON - Android - Login */

Route::get('/json/login/u/{usuario}/c/{password}', ['as' => 'json-login', 'uses' => 'HomeController@JsonLogin']);


