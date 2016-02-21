<?php

class Programa extends Eloquent {
	protected $table = 'programas';
	protected $fillable = array('id', 'sede_id','sede', 'facultad_id' ,'facultad' , 'programa');
	public $timestamps = false;

	public function perfiles(){
		return $this->hasMany('Perfile','programa_id','id');
	}
}