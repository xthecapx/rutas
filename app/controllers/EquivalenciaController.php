<?php

class EquivalenciaController extends BaseController {

	public function getIndex()
	{
		return View::make('dobleTitulacion.equivalencias');
	}

	public function postIndex()
	{
		$FORMactual = $_POST["programa_actual"];
		$FORMopcion = $_POST["programa_destino"];

		$equivalencia = Equivalencia::where('programaOrigen', '=', $FORMactual)
							->where('programaDestino', '=', $FORMopcion)
							->first();
							
		$aequivalencias = Aequivalencia::where('equivalenciaId','=',$equivalencia->id)->get();

		//return $equivalencia . '<br>' . '<br>' . $equivalencias;
		return View::make('dobleTitulacion.showe')->with('equivalencia',$equivalencia)
												  ->with('aequivalencias', $aequivalencias);
	}
}