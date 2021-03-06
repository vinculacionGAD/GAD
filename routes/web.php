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
Route::post('almacenes/{id}','AlmacenesController@modificar');
//fin de gestion de almacenes

//Inicio de gestion de bomberos
Route::resource('bomberos','BomberosController');
Route::get('bombero','BomberosController@listing');
Route::post('bomberos/{id}','BomberosController@modificar');
//fin de gestion de bomberos

//Inicio de gestion de comunidades
Route::resource('comunidades','ComunidadesController');
Route::get('comunidad','ComunidadesController@listing');
Route::post('comunidades/{id}','ComunidadesController@modificar');
//fin de gestion de comunidades

//Inicio de gestion de bomberos
Route::resource('cruzRoja','CruzRojaController');
Route::get('cruz','CruzRojaController@listing');
Route::post('cruzRoja/{id}','CruzRojaController@modificar');
//fin de gestion de bomberos

//Inicio de gestion de departamentos
Route::resource('departamentos','DepartamentosController');
Route::get('departamento','DepartamentosController@listing');
Route::post('departamentos/{id}','DepartamentosController@modificar');
//fin de gestion de departamentos

//Inicio de gestion de familias
Route::resource('familias','FamiliasController');
Route::get('familia','FamiliasController@listing');
Route::post('familias/{id}','FamiliasController@modificar');
//fin de gestion de familias

//Inicio de gestion de hospitales
Route::resource('hospitales','HospitalesController');
Route::get('hospital','HospitalesController@listing');
Route::post('hospitales/{id}','HospitalesController@modificar');
//fin de gestion de hospitales

//Inicio de gestion de marina
Route::resource('marinas','MarinaController');
Route::get('marina','MarinaController@listing');
Route::post('marinas/{id}','MarinaController@modificar');
//fin de gestion de marina

//Inicio de gestion de organizaciones
Route::resource('organizaciones','OrganizacionesController');
Route::get('organizacion','OrganizacionesController@listing');
Route::post('organizaciones/{id}','OrganizacionesController@modificar');
//fin de gestion de organizaciones

//inicio Gestion Perdidas
Route::resource('perdidas','PerdidasController');
Route::get('perdida','PerdidasController@listing');
Route::post('perdidas/{id}','PerdidasController@modificar');
//fin Gestion Perdidas

//inicio Gestion Personales
Route::resource('personales','PersonalesController');
Route::get('personal','PersonalesController@listing');
Route::post('personales/{id}','PersonalesController@modificar');
//fin Gestion Personales

//inicio Gestion Personas
Route::resource('personas','PersonasController');
Route::get('persona','PersonasController@listing');
Route::post('personas/{id}','PersonasController@modificar');
//fin Gestion Personas

//inicio Gestion PersonasHogares
Route::resource('personasHogares','PersonasHogaresController');
Route::get('personaHogar','PersonasHogaresController@listing');
Route::post('personasHogares/{id}','PersonasHogaresController@modificar');
//fin Gestion PersonasHogares

//Inicio de gestion de policias
Route::resource('policias','PoliciasController');
Route::get('policia','PoliciasController@listing');
Route::post('policias/{id}','PoliciasController@modificar');
//fin de gestion de policias

//Inicio Gestion Productos
Route::resource('productos','ProductosController');
Route::get('producto','ProductosController@listing');
Route::post('productos/{id}','ProductosController@modificar');
//fin gestion productos

//Inicio Gestion Proveedores
Route::resource('proveedores','ProveedoresController');
Route::get('proveedor','ProveedoresController@listing');
Route::post('proveedores/{id}','ProveedoresController@modificar');
//fin gestion proveedores

//Inicio de gestion de programas
Route::resource('programas','ProgramasController');
Route::get('programa','ProgramasController@listing');
Route::post('programas/{id}','ProgramasController@modificar');
//fin de gestion de programas

//Inicio de gestion de proyectos
Route::resource('proyectos','ProyectosController');
Route::get('proyecto','ProyectosController@listing');
Route::post('proyectos/{id}','ProyectosController@modificar');
//fin de gestion de proyectos

//Inicio de gestion de puntosEncuentro
Route::resource('puntosEncuentro','PuntosEncuentroController');
Route::get('puntoEncuentro','PuntosEncuentroController@listing');
Route::post('puntosEncuentro/{id}','PuntosEncuentroController@modificar');
//fin de gestion de puntosEncuentro

//Inicio de gestion de refugios
Route::resource('refugios','RefugiosController');
Route::get('refugio','RefugiosController@listing');
Route::post('refugios/{id}','RefugiosController@modificar');
//fin de gestion de refugios

//Inicio de gestion de recursos
Route::resource('sectores','SectoresController');
Route::get('sector','SectoresController@listing');
Route::post('sectores/{id}','SectoresController@modificar');
//fin de gestion de recursos

//Inicio de gestion de recursos
Route::resource('recursos','RecursosController');
//fin de gestion de recursos

//Inicio Gestion Voluntarios
Route::resource('voluntarios','VoluntariosController');
Route::get('voluntario','VoluntariosController@listing');
Route::post('voluntarios/{id}','VoluntariosController@modificar');
//fin gestion voluntarios

//Inicio Gestion Viviendas
Route::resource('viviendas','ViviendasController');
Route::get('vivienda','ViviendasController@listing');
Route::post('viviendas/{id}','ViviendasController@modificar');
//fin gestion viviendas

//Inicio Gestion Usuarios
Route::resource('usuario','UsuarioControllers');
Route::get('usuarios','UsuarioControllers@store');
Route::post('/usuario_contrasena','UsuarioControllers@actualizarContrsenaUsuarios');
Route::post('viviendas/{id}','ViviendasController@modificar');
//fin gestion usuarios

//Rutas de Reportes
Route::get('app/crear_reporte_productos/{tipo}', 'PdfController@index');
Route::get('app/crear_reporte_albergues/{tipo}','PdfController@crear_reporte_albergues');
Route::get('app/crear_reporte_hospitales/{tipo}','PdfController@crear_reporte_hospitales');
Route::get('app/crear_reporte_almacenes/{tipo}','PdfController@crear_reporte_almacenes');
Route::get('app/crear_reporte_marinas/{tipo}','PdfController@crear_reporte_marinas');
Route::get('app/crear_reporte_bomberos/{tipo}','PdfController@crear_reporte_bomberos');
Route::get('app/crear_reporte_policia/{tipo}','PdfController@crear_reporte_policias');
Route::get('app/crear_reporte_proyectos/{tipo}','PdfController@crear_reporte_proyectos');
Route::get('app/crear_reporte_personal/{tipo}','PdfController@crear_reporte_personales');
Route::get('app/crear_reporte_perdida/{tipo}','PdfController@crear_reporte_perdida');
Route::get('app/crear_reporte_programa/{tipo}/{id}','PdfController@crear_reporte_Programa');
Route::get('app/crear_reporte_organizacion/{tipo}/{id}','PdfController@crear_reporte_organizacion');
Route::get('app/crear_reporte_perdidas/{tipo}/{id}','PdfController@crear_reporte_perdidas');
Route::get('app/crear_reporte_ListarFamilia/{tipo}','PdfController@crear_reporte_ListarFamilia');
Route::get('app/crear_reporte_ListarFamiliaVivienda/{tipo}/{id}','PdfController@crear_reporte_ListarFamiliaVivienda');
Route::get('app/crear_reporte_comunidad/{tipo}/{id}','PdfController@crear_reporte_comunidad');
Route::get('app/crear_reporte_sector/{tipo}/{id}','PdfController@crear_reporte_sector');



//fin de reportes

Route::group(['middleware' => ['web']], function () {

//Route::group(['middleware' => ['web']], function () {

		Route::get('/', function () {
		    		return view('login');
    		});

// Login del sistema
Route::post('/logeo',array('as'=>'login', 'uses'=>'LoginController@login_gad'));
Route::get('/logout','LoginController@logout_gad');


	Route::get('/', function () {
		if (Auth::guest()){
    		return view('login');
    	}else{
    		 return Redirect('app');
    	}
	});

});

Route::get('/app/usuarios', function(){
		return view('usuarios.CrearUsuarios');
	});
//Route::get('/home','AppController@index');
Route::get('/app','AppController@index');



// Login del sistema
Route::post('/logeo','LoginController@login_gad');
Route::get('/logout','LoginController@logout_gad');