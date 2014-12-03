<?php

class Estudiante extends \Eloquent {
	protected $fillable = [];
	protected $table = 'estudiantes';

	public function beca()
	{
		return $this->hasOne('Beca');
	}

	public function tareas(){

		return $this->hasMany('Tarea');
	}

	public function proyecto(){

		return $this->belongsTo('Proyecto');
	}

	public function perfil(){

		return $this->belongsTo('Perfil');
	}



}