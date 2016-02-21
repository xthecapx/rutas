<?php

class Aequivalencia extends Eloquent {
	protected $table = 'aequivalencias';
	public $timestamps = false;

	public function equivalencias(){
		return $this->belongsTo('Equivalencia', 'id','equivalenciaId');
	}
}