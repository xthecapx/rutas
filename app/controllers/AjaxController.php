<?php

class AjaxController extends BaseController {

	public function ajaxSedes()
	{
		$sedes = DB::table('programas')->select('sede_id','sede')->distinct()->get();

		$json = array();
		foreach ($sedes as $key => $value) {
		 	$json[] = array('id' => $value->sede_id, 'value' => $value->sede);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function ajaxFacultades()
	{
		$sede_id = Input::get('option');
		$facultades = DB::table('programas')->select( 'facultad_id', 'facultad')->where('sede_id','=',$sede_id)->distinct()->get();

		$json = array();
		foreach ($facultades as $key => $value) {
			$json[] = array('id' => $value->facultad_id, 'value' => $value->facultad);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function ajaxProgramas()
	{
		$facultad_id = Input::get('option');
		$procesos = DB::table('programas')->select('id', 'programa')->where('facultad_id','=',$facultad_id)->distinct()->get();
		$json = array();
		foreach ($procesos as $key => $value) {
			$json[] = array('id' => $value->id, 'value' => $value->programa);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function ajaxActuales(){
		$actuales = DB::table('equivalencias')->select('programaOrigen')->distinct()->get();

		$json = array();
		foreach ($actuales as $key => $value) {
		 	$json[] = array('id' => $value->programaOrigen, 'value' => $value->programaOrigen);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function ajaxOpciones(){
		$actuales = Input::get('option');
		$opciones = DB::table('equivalencias')->select('programaDestino')->where('programaOrigen','=',$actuales)->distinct()->get();

		$json = array();
		foreach ($opciones as $key => $value) {
			$json[] = array('id' => $value->programaDestino, 'value' => $value->programaDestino);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;

	}

	public function ajaxAsignaturas(){

	}
}