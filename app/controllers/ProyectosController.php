<?php

class ProyectosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /proyectos
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$proyectos = Proyecto::all();

		return View::make('proyectos.editarProyectos', compact('proyectos'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /proyectos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /proyectos
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$proyecto = new Proyecto;

		$proyecto->nombre = Input::get('nombre');
		$proyecto->dependencia = Input::get('dependencia');
		$proyecto->tipoProyecto = Input::get('tipoProyecto');
		$proyecto->duracion = Input::get('duracion');
		$proyecto->numeroIntegrantes = Input::get('numeroIntegrantes');
		$proyecto->objetivo = Input::get('objetivo');
		$proyecto->descripcion = Input::get('descripcion');

		$proyecto->save();

		$numActividades = Input::get('numeroActividades');

		for ($i = 1; $i <= $numActividades; $i++) {
    		$actividad[$i] = new Actividad;
    		$actividad[$i]->nombre = Input::get('campo'.$i);
    		$actividad[$i]->proyecto_id = $proyecto->id;
    		$actividad[$i]->save();
		}


		$perfiles = Input::get('perfiles');

	    if(is_array($perfiles)) 
	    {
	        for($i=0 ;$i < count($perfiles); $i++)
	        {
	            // insert data on first table (accounts table)
	            $perfilNew[$i] = new PerfilProyecto;
	            $perfilNew[$i]->perfil_id = $perfiles[$i];
	            $perfilNew[$i]->proyecto_id = $proyecto->id;
	            $perfilNew[$i]->save();
	            
	        }
	    }

		

		return Redirect::to('inicio');

	}

	/**
	 * Display the specified resource.
	 * GET /proyectos/{id}
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
	 * GET /proyectos/{id}/edit
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
	 * PUT /proyectos/{id}
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
	 * DELETE /proyectos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$proyecto = Proyecto::find($id);
        $proyecto->delete();

        // redirect
        Session::flash('message', 'El proyecto "'.$proyecto->nombre.'" se ha eliminado!');
        return Redirect::to('editarProyectos');
	}


}