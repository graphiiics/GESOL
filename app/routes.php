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
	return View::make('hello');
});


Route::resource('administadores', 'AdministradoresController');
Route::resource('estudiantes', 'EstudiantesController');
Route::resource('proyectos', 'ProyectosController');
Route::resource('actividades', 'ActividadesController');
Route::resource('perfiles', 'PerfilesController');
Route::resource('becas', 'BecasController');
Route::resource('planeaciones', 'PlaneacionesController');
Route::resource('tareas', 'TareasController');


Route::get('verProyectos', 'catalogoController@getCatalogo');
Route::get('datos/{id}', 'catalogoController@getDatos');

Route::get('test', function()
{
	return View::make('test');
	//return 'Ola k ase!';
});

Route::get('inicio', function()
{
	return View::make('index');
});

Route::get('login', function()
{
	return View::make('login');
});


Route::get('nuevoEstudiante', function()
{
	return View::make('estudiantes/nuevo');
});




