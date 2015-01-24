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
Route::get('/login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::post('/dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@logeo']);
Route::group(array('before' => 'auth'), function()
{

Route::get('/dashboard', ['as' => 'inicio', 'uses' => 'HomeController@logeo']);
Route::any("/logout", ["as" => "logout","uses" => "HomeController@logoutAction" ]);

Route::get('/dashboard', ['as' => 'menuInicio', 'uses' => 'HomeController@menuInicio']);


///consulta paquetes

Route::get('/paquete/{slug}/{idAgencia}', ['as' => 'paquetesCreados', 'uses' => 'AgenciaTuristicaController@consultaPaqueteTuristico']);
Route::get('/admi_paquete', ['as' => 'creacionPaqueteTuristico', 'uses' => 'PaquetesController@creacionPaquete']);
Route::get('/admi_paquete', ['as' => 'guardarPaqueteTuristico', 'uses' => 'PaquetesController@GuardarPaquete']);
Route::get('/admi_paquete', ['as' => 'eliminarPaqueteTuristico', 'uses' => 'PaquetesController@EliminarPaquete']);

});









/*Route Get JSON - Android - Login */
Route::get('/json/login/u/{usuario}/c/{password}', ['as' => 'json-login', 'uses' => 'HomeController@JsonLogin']);
Route::get('/json/consulta/u/{paquete}', ['as' => 'json-paquetePersonalizado', 'uses' => 'HomeController@jsonConsultarPaquetespersonalizado']);
Route::get('/json/consulta/paquetes', ['as' => 'json-paquete', 'uses' => 'HomeController@jsonConsultarPaquetesJson']);
Route::get('/json/consulta/agencias', ['as' => 'json-paquete', 'uses' => 'HomeController@jsonConsultarTodasAgencias']);
Route::get('/json/consulta/agencias/u/{idAgencia}', ['as' => 'json-paquete', 'uses' => 'HomeController@jsonConsultarInfoAgencias']);


