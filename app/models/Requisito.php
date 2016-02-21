<?php

class Requisito extends Eloquent {
	protected $table = 'requisitos';
	protected $fillable = ['requisitos'];
	public $timestamps = false;

	public function asignaturas(){
		return $this->belongsToMany('Asignatura');
	}
}