<?php

class Proyecto extends \Eloquent {
	protected $fillable = [];
	protected $table = 'proyectos';

	public function estudiantes(){

		return $this->hasMany('Estudiante');
	}

	public function actividades(){

		return $this->hasMany('Actividad');
	}

	public function planeacion(){

		return $this->hasOne('Planeacion');
	}

	public function perfiles(){

		return $this->belongsToMany('Perfil');
	}

	
}