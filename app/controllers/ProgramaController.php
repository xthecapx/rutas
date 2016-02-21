<?php

class ProgramaController extends BaseController {

	public function getIndex()
	{
		$sedes = Programa::All();
		$sede_selector = array();
		$facultad_selector = array();
		$programa_selector = array();

		foreach($sedes as $sede){
			$sede_selector[$sede->sede] = $sede->sede;
		}
		//return $sede_selector;

		return View::make('rutas.programas')->with('sede_selector', $sede_selector);
	}

	public function postIndex()
	{
		$FORMsede = $_POST["sede"];
		$FORMfacultad = $_POST["facultad"];
		$FORMprograma = $_POST["programa"];

		$programa = Programa::where('id', '=', $FORMprograma)
							->where('facultad_id', '=', $FORMfacultad)
							->where('sede_id','=', $FORMsede )
							->first();
		if($programa == null){
			return Redirect::to('/programa')->with('message','El programa seleccionada no registra perfiles');
		}
		$perfil = Programa::find($programa->id)->Perfiles;

		$totalCreditos = [];
		$index = 0;

		foreach ($perfil as $key => $value) {
			$contador_creditos = 0;
			$consulta_asignaturas = Perfile::find($value->id)->asignaturas;
			foreach ($consulta_asignaturas as $key => $value) {
				$contador_creditos += $consulta_asignaturas[$key]->creditos;
			}
			$perfil[$index]->contador_creditos = $contador_creditos;
			$index++;
		}

		return View::make('rutas.perfiles')	->with('perfil',$perfil)
											->with('programa', $programa);
	}

	public function Perfil($perfilId)
	{
		$perfil = Perfile::find($perfilId);
		$perfiles = Programa::find($perfil->programa_id)->perfiles;
		$programa = Programa::find($perfil->programa_id);

		if($perfil == null){
			return Redirect::to('/programa')->with('message','Perfil no existe');
		}

		$totalCreditos = [];
		$index = 0;

		foreach ($perfiles as $key => $value) {
			$contador_creditos = 0;
			$consulta_asignaturas = Perfile::find($value->id)->asignaturas;

			foreach ($consulta_asignaturas as $key => $value) {
				$contador_creditos += $consulta_asignaturas[$key]->creditos;
			}

			$perfiles[$index]->contador_creditos = $contador_creditos;
			$index++;
		}

		return View::make('rutas.perfiles')	->with('perfil',$perfiles)
											->with('programa',$programa);
	}

	public function Asignatura($URLid)
	{
		$perfil = Perfile::find($URLid);
		$asignaturas = Perfile::find($perfil->id)->asignaturas;

		$datos = [];
		foreach ($asignaturas as $key) {

			$basignatura = Asignatura::find($key->id);
			$requisitos = Asignatura::find($basignatura->id)->requisitos;

			//echo "Asignatura:" . $basignatura . '<br>';
			//echo "Requisito:" . $requisitos . '<br>';

			$temp = [];

			foreach ($requisitos as $key => $requisito) {
				$temp[] = array('requisito' => $requisito->requisito);
				$datos2 = array('asignatura_id' => substr($basignatura->asignatura_id, 0, -1), 'asignatura' => $basignatura->asignatura, 'creditos' => $basignatura->creditos, 'tipologia' => $basignatura->tipologia, 'agrupacion' => $basignatura->agrupacion, 'requisitos' => $temp);
			}
			$datos[] = $datos2;
		}
		//return var_dump($datos);
		return View::make('rutas.asignaturasajax')	->with('datos', $datos)
													->with('perfil', $perfil->id)
													->with('perfil_nombre', $perfil->perfil);
	}

	public function Requisito($perfilID, $asignaturaID)
	{
		$perfil = Perfile::find($perfilID);
		$asignatura = Asignatura::find($asignaturaID);
		$requisito = Asignatura::find($asignatura->id)->requisitos;

		return View::make('rutas.requisitos')	->with('perfil', $perfil)
												->with('asignatura', $asignatura)
												->with('requisito', $requisito);
	}

	public function VolverIndex()
	{
		return Redirect::to('/programa');
	}
};