<?php

class Equivalencia extends Eloquent {
	protected $table = 'equivalencias';
	protected $fillable = array('id', 'actual', 'opcion');
	public $timestamps = false;

	public function Aequivalencias(){
		return $this->hasMany('aequivalencia','equivalenciaId','id');
	}
}