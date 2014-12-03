<?php

class Actividad extends \Eloquent {
	protected $fillable = [];
	protected $table = 'actividades';

	public function proyecto(){

		return $this->belongsTo('Proyecto');
	}

	
}