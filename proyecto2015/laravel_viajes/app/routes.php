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
Route::group(array('before' => 'auth'), function()
{


Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'HomeController@dashboard']);

/*Post Login*/
Route::post('/login-agencia', ['as' => 'login-agencia', 'uses' => 'HomeController@logeo']);

/*Post Admi Agencia Turistica*/
Route::post('/upagencia', ['as' => 'upagencia', 'uses' => 'AgenciaTuristicaController@upAgencia']);

/*Route get listado paqete turistico*/
Route::get('/paquetes-turisticos', ['as' => 'paquetes-turisticos', 'uses' => 'PaqueteTuristicoController@showPaquetes']);

/*Route get Administracion de paquetes*/
Route::get('/admi-paquete-turistico', ['as'=>'admi-paquete-turistico', 'uses' => 'PaqueteTuristicoController@showAdmiPaquetes']);
Route::get('/consultar-paquete-turistico', ['as'=>'admi-paquete-turisticoNo', 'uses' => 'PaqueteTuristicoController@consultarSiPaquetesTuristicos']);  //si tiene agencia registrado y consulta los paquetes
Route::get('/consultar-paquete-turistico/{slug}',['as'=>'publicar-paquete-turistico','uses'=>'PaqueteTuristicoController@publicarPaqueteTuristico']);
Route::get('/editar-paquete-turistico/{slug}',['as'=>'editar-paquete-turistico-info','uses'=>'PaqueteTuristicoController@editarPaqueteTuristico']);
Route::get('/elimina-paquete-turistico/{slug}',['as'=>'elimina-paquete-turistico','uses'=>'PaqueteTuristicoController@eliminaPaqueteTuristico']);

/*route creacion iteracion */
Route::get('/creacion-iteracion', ['as' => 'creacion-iteracion', 'uses' => 'PaqueteTuristicoController@creacionIteracion']);
Route::get('/creacion-iteracion', ['as' => 'publicar-paquete-itinerario', 'uses' => 'PaqueteTuristicoController@creacionIteracion']);

/*Post Admi Paquete Turistico*/
Route::post('/save-paquete-turistico', ['as' => 'save-paquete-turistico', 'uses' => 'PaqueteTuristicoController@savePaquete']);


/*Route get registrar-agencia*/
Route::get('/registrar-agencia', ['as' => 'registrar-agencia', 'uses' => 'AgenciaTuristicaController@show']);
Route::get('/conusltar-agencia', ['as' => 'consultar-agencia','uses'=>'AgenciaTuristicaController@mostrarInforAgencia']);
Route::put('/update-agencia',['as'=>'update-agecia','uses'=>'AgenciaTuristicaController@updateAgencia']);




/*Route get actualizar Datos usuario*/
Route::get('/usuario', ['as' => 'Updateusuario', 'uses' => 'UsuarioController@obtenerDatosUsuario']);
Route::put('/update_usuario', ['as' => 'update_usuario', 'uses' => 'UsuarioController@updateUsuario']);


/*Route get salir*/


Route::any("/logout", ["as" => "logout","uses" => "HomeController@logoutAction" ]);

});
/*Route Get JSON - Android - Login */

Route::get('/json/login/u/{usuario}/c/{password}', ['as' => 'json-login', 'uses' => 'HomeController@JsonLogin']);
Route::get('/json/consulta/u/{paquete}', ['as' => 'json-paquetePersonalizado', 'uses' => 'HomeController@jsonConsultarPaquetespersonalizado']);
Route::get('/json/consulta/paquetes', ['as' => 'json-paquete', 'uses' => 'HomeController@jsonConsultarPaquetes']);


