<?php

class AfinidadController extends BaseController {

	public function getIndex()
	{
		return View::make('dobleTitulacion.programa');
	}

	public function postIndex()
	{
		$formSede = $_POST["sedeOrigen"];
		$formOrigen = $_POST["programaOrigen"];

		$programa = DB::table('afinidades')->orderBy('errorOrigenDestino', 'desc')->where('idSedeOrigen', '=', $formSede)->where('idProgramaOrigen', '=', $formOrigen)->get();

		//return $programa{0}->idSedeOrigen;
		//return $programa;
		//$data = json_encode($programa);

		return View::make('dobleTitulacion.afinidades')->with('programa',$programa);
	}

	public function sedeOrigen()
	{
		$sedeOrigen = DB::table('afinidades')->select('idSedeOrigen','SedeOrigen')->distinct()->get();

		$json = array();
		foreach ($sedeOrigen as $key => $value) {
		 	$json[] = array('id' => $value->idSedeOrigen, 'value' => $value->SedeOrigen);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function programaOrigen()
	{
		$sede_id = Input::get('option');
		$origen = DB::table('afinidades')->select('idSedeOrigen','idProgramaOrigen','programaOrigen')->where('idSedeOrigen','=',$sede_id)->distinct()->get();

		$json = array();
		foreach ($origen as $key => $value) {
			$json[] = array('id' => $value->idProgramaOrigen, 'value' => $value->programaOrigen);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}

	public function programaDestino()
	{
		$origen_id = Input::get('option');
		$destino = DB::table('afinidades')->select('idProgramaOrigen','idProgramaDestino','programaDestino')->where('idProgramaOrigen','=',$origen_id)->distinct()->get();

		$json = array();
		foreach ($destino as $key => $value) {
			$json[] = array('id' => $value->idProgramaDestino, 'value' => $value->programaDestino);
		}

		$data = json_encode($json); 
	    $response = isset($_GET['callback'])?$_GET['callback']."(".$data.")":$data;
		return $response;
	}
}