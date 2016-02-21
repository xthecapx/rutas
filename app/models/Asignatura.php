<?php

class Asignatura extends Eloquent {
	protected $table = 'asignaturas';
	protected $fillable = ['asignatura'];
	public $timestamps = false;

	public function perfiles(){
		return $this->belongsToMany('Perfile');
	}

	public function requisitos(){
		return $this->belongsToMany('Requisito');
	}

/*	public function Asignaturas(){
		return $this->belongsToMany('Asignatura', 'asignatura_rasig', 'asignatura_id','rasig_id');
	}

	public function theAsignaturas(){
		return $this->belongsToMany('Asignatura','asignatura_rasig', 'rasig_id', 'asignatura_id');
	}*/
}