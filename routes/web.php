<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Inicio de gestion de almacenes
Route::resource('almacenes','AlmacenesController');
Route::get('almacen','AlmacenesController@listing');
//fin de gestion de almacenes

//Inicio de gestion de comunidades
Route::resource('comunidades','ComunidadesController');
Route::get('comunidad','ComunidadesController@listing');
//fin de gestion de comunidades

//Inicio de gestion de departamentos
Route::resource('departamentos','DepartamentosController');
Route::get('departamento','DepartamentosController@listing');
//fin de gestion de departamentos

//Inicio de gestion de familias
Route::resource('familias','FamiliasController');
Route::get('familia','FamiliasController@listing');
//fin de gestion de familias

//Inicio de gestion de hospitales
Route::resource('hospitales','HospitalesController');
Route::get('hospital','HospitalesController@listing');
//fin de gestion de hospitales

//Inicio de gestion de organizaciones
Route::resource('organizaciones','OrganizacionesController');
Route::get('organizacion','OrganizacionesController@listing');
//fin de gestion de organizaciones

//inicio Gestion Personales
Route::resource('personales','PersonalesController');
Route::get('personal','PersonalesController@listing');
//fin Gestion Personales

//inicio Gestion Personas
Route::resource('personas','PersonasController');
Route::get('persona','PersonasController@listing');
//fin Gestion Personas

//inicio Gestion PersonasHogares
Route::resource('personasHogares','PersonasHogaresController');
Route::get('personaHogar','PersonasHogaresController@listing');
//fin Gestion PersonasHogares

//Inicio Gestion Productos
Route::resource('productos','ProductosController');
Route::get('producto','ProductosController@listing');
//fin gestion productos

//Inicio Gestion Proveedores
Route::resource('proveedores','ProveedoresController');
Route::get('proveedor','ProveedoresController@listing');
//fin gestion proveedores

//Inicio de gestion de programas
Route::resource('programas','ProgramasController');
Route::get('programa','ProgramasController@listing');
//fin de gestion de programas

//Inicio de gestion de proyectos
Route::resource('proyectos','ProyectosController');
Route::get('proyecto','ProyectosController@listing');
//fin de gestion de proyectos

//Inicio de gestion de refugios
Route::resource('refugios','RefugiosController');
Route::get('refugio','RefugiosController@listing');
//fin de gestion de refugios

//Inicio de gestion de recursos
Route::resource('sectores','SectoresController');
Route::get('sector','SectoresController@listing');
//fin de gestion de recursos

//Inicio de gestion de recursos
Route::resource('recursos','RecursosController');
//fin de gestion de recursos

//Inicio Gestion Voluntarios
Route::resource('voluntarios','VoluntariosController');
Route::get('voluntario','VoluntariosController@listing');
//fin gestion voluntarios

//Inicio Gestion Viviendas
Route::resource('viviendas','ViviendasController');
Route::get('vivienda','ViviendasController@listing');
//fin gestion viviendas

Route::get('/', function () {
    return view('login');
});


Route::get('/app/usuarios', function(){
	return view('usuarios.CrearUsuarios');
});

Route::get('/app', function(){
	return view('layouts.app');
});
