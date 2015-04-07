<?php

class TareasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tareas
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tareas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tareas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$numTareas = Input::get('numeroTareas');
		for ($i = 1; $i <= $numTareas; $i++) 
		{
    		$tarea[$i] = new Tarea;
    		$tarea[$i]->nombre = Input::get('nombre'.$i);
    		$tarea[$i]->porcentaje = Input::get('porcentaje'.$i);
    		$tarea[$i]->tiempo = Input::get('duracion'.$i);
    		$tarea[$i]->proyecto_id = $estudiante->proyecto_id;
    		
    		$tarea[$i]->save();
		}

		return Redirect::to('perfilEstudiante/'.$id);
	}

	/**
	 * Display the specified resource.
	 * GET /tareas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tareas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tareas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tareas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function validarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 1;
		$tarea->save(); 

		return Redirect::to('finalizarTareas');

	}

	public function eliminarTarea($id)
	{
		
		$tarea = Tarea::find($id);
		$tarea->delete();
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha eliminado!');

		return Redirect::to('finalizarTareas');

	}


	public function aprobarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 2;
		$tarea->save(); 
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha aprobado!');
		return Redirect::to('validarTareas');

	}

	public function rechazarTarea($id)
	{
		
		$tarea = Tarea::find($id);

		$tarea->estatus = 0;
		$tarea->save(); 
		Session::flash('message', 'La tarea "'.$tarea->nombre.'" se ha rechazado!');
		return Redirect::to('validarTareas');

	}

}