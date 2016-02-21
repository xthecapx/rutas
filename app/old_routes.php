<?php

/*Route::get('carreras', function(){
 	$carrera = new Carrera;

 	$carrera->nombre = "Carrera 1";
 	$carrera->sede = "Sede 1";
 	$carrera->facultad = "Facultad 1";

 	$carrera->save();

 	return "Carrera creado en la base de datos";
});*/

Route::get('ver_cp',function(){

	$busqueda = 1;

	$perfil = Carrera::find($busqueda)->Perfiles;
	$titulo = Carrera::where('id', '=', $busqueda)->first();

	echo '<h2>' . $titulo->carrera . '</h2>';

	$lista = '<ul>';

	foreach ($perfil as $item){
		$lista .= '<li>';
		$lista .=  '<div>' . $item['perfil'] . '</div>';
		$lista .= '</li>';
	}

	$lista .= '</ul>';
	return $lista;
});

Route::get('registrar_p_en_a', function(){
	$asignatura = Asignatura::find(4);
	$asignatura->perfiles()->attach(1);
	foreach ($asignatura->perfiles()->get() as $asignatura) {
		var_dump($asignatura->perfil);
	}
});

Route::get('registrar_a_en_p', function(){
	$perfil = Perfile::where('perfil', '=', 'Jalon Schaden MD')->first();
	$perfil->asignaturas()->attach(4);
	foreach ($perfil->asignaturas()->get() as $perfil) {
		var_dump($perfil->asignatura);
	}
});

Route::get('ver_asignaturas', function(){

	$perfil = Perfile::where('perfil', '=', 'Jalon Schaden MD')->first();
	if(count($perfil->asignaturas()->get()) == 0){
	 	echo 'El perfil ' . $perfil->perfil . ' no tiene asignaturas';
	}else{
	 	echo 'El perfil: <b>' . $perfil->perfil . '</b><h3> Tiene las siguientes asignaturas: </h3><ul>';
		foreach($perfil->asignaturas()->get() as $key){
			echo '<li>' . $key->asignatura . '</li>';
	 	}
	 	echo '</ul>';
	}
});