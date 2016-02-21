<?php

class Perfile extends Eloquent {
	protected $table = 'perfiles';
	protected $fillable = ['perfil', 'programa_id', 'total_creditos', 'descripcion'];
	public $timestamps = false;

	public function programa(){
		return $this->belongsTo('Programa', 'id','programa_id');
	}

	public function asignaturas(){
		return $this->belongsToMany('Asignatura');
	}
}