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

//Login
Route::get('login','LoginController@getIndex');
Route::post('login','LoginController@postIndex');
Route::get('logout', 'LoginController@logout');

Route::group(array('before' => 'ldapUNAL'), function () {

	//Inicio
	Route::get('/','IndexController@getIndex');

	//Rutas
	Route::get('programa','ProgramaController@getIndex');
		//Perfil
		Route::post('programa','ProgramaController@postIndex'); //Perfil Post
		Route::get('programa/perfil/{perfilId?}','ProgramaController@Perfil'); //Go back
		//Asignatura
		Route::get('programa/asignatura/{URLid?}', 'ProgramaController@Asignatura'); //Asignatura
		//Requisitos
		Route::get('programa/requisito/{perfilId?}/{asignaturaId?}', 'ProgramaController@Requisito'); //Requisito
		//Seeders pivot
		Route::get('pivotAP', 'PivotController@AsignaturaPerfile');
		Route::get('pivotAR', 'PivotController@AsignaturaRequisito');
		Route::get('pruebas', function(){
			$sedes = Asignatura::find('1000010B');
			return $sedes;
		});

//Doble titulación
	Route::get('titulacion', 'TitulacionController@getIndex');
	//Porcentaje de afinidad
		Route::get('titulacion/afinidad','AfinidadController@getIndex');
		Route::post('titulacion/afinidad','AfinidadController@postIndex');
	//Equivalencias dobletitulación
		Route::get('titulacion/equivalencias', 'EquivalenciaController@getIndex');
		Route::post('titulacion/equivalencias','EquivalenciaController@postIndex');

//Contact
	Route::controller('contacto', 'ContactController');

//MENU
	Menu::make('MenuPrincipal', function($menu){
		$menu->add('Inicio');
		$menu->add('Rutas', 'programa');
		$menu->add('Doble titulación', 'titulacion');
		$menu->get('dobleTitulación')->add('Afinidades','titulacion/afinidad');
		$menu->get('dobleTitulación')->add('Equivalencias','titulacion/equivalencias');
		$menu->add('Video Tutoriales', 'http://campus.virtual.unal.edu.co/course/view.php?id=6728');
		//$menu->add('Homologaciones y equivalencias', '#');
		//add('/titulacion/afinidad','/titulacion/equivalencias');
		//$menu->add('Normatividad', 'Normatividad');
		//$menu->add('Contacto', 'contacto');
	});

//Video
	Route::controller('tutoriales', 'TutorialController');

//Busquedas para AJAX
	//rutas
	Route::get('sedes', 'AjaxController@ajaxSedes');
	Route::get('facultades', 'AjaxController@ajaxFacultades');
	Route::get('programas', 'AjaxController@ajaxProgramas');

	//titulacion
	Route::get('actuales', 'AjaxController@ajaxActuales');
	Route::get('opciones', 'AjaxController@ajaxOpciones');

	//asignaturas
	Route::get('asignaturas', 'AjaxController@ajaxAsignatuas');

	//Afinidades
	Route::get('sedeOrigen', 'AfinidadController@SedeOrigen');
	Route::get('programaOrigen', 'AfinidadController@programaOrigen');
	Route::get('programaDestino', 'AfinidadController@programaDestino');

});
