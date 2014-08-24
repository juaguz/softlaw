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

Route::get('/', function()
{
	return View::make('master');

});


Route::post('login',array('as'=>'usuarios.login','uses'=>'UsuariosController@login'));
Route::get ('login',array('as'=>'usuarios.login','uses'=>'UsuariosController@login'));

Route::resource('tareas','TareasController');
Route::resource('juicios','JuiciosController');
Route::resource('combos','CombosController');
Route::resource('deptoJudicial','DeptoJudicialController');
Route::resource('fueros','FuerosController');
Route::resource('juzgados','JuzgadosController');
Route::resource('etapas','EtapasController');
Route::resource('tareas','TareasController');
Route::resource('audiencias','AudienciasController');
Route::resource('calendario','CalendarioController');
Route::post('tareas/getTareasJuicio','TareasController@getTareasJuicio');
Route::post('audiencias/getAudienciasJuicios','AudienciasController@getAudienciasJuicio');
Route::post('comando',function(){
    Artisan::call('git:pull',[]);
});