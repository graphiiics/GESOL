<?php

class EstudiantesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /estudiantes
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /estudiantes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /estudiantes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$estudiante = new Estudiante;

		$estudiante->nombres = Input::get('nombres');
		$estudiante->apellidos = Input::get('apellidos');
		$estudiante->edad = Input::get('edad');
		$estudiante->fechaNacimiento = Input::get('fechaNacimiento');
		$estudiante->telefono = Input::get('telefono');
		$estudiante->celular = Input::get('celular');
		$estudiante->email = Input::get('email');
		$estudiante->contrasena = Input::get('contrasena');
		$estudiante->sexo = Input::get('sexo');
		$estudiante->codigoPostal = Input::get('codigoPostal');
		$estudiante->estado = Input::get('estado');
		$estudiante->municipio = Input::get('municipio');
		$estudiante->universidad = Input::get('universidad');
		$estudiante->carrera = Input::get('carrera');
		$estudiante->matricula = Input::get('matricula');
		$estudiante->modalidad = Input::get('modalidad');
		$estudiante->grado = Input::get('grado');
		$estudiante->promedio = Input::get('promedio');
		$estudiante->periodo = Input::get('periodo');
		$estudiante->perfil_id = Input::get('perfil_id');
		$estudiante->direccion = Input::get('direccion');
		
		$estudiante->save();

		//echo($estudiante);

		return Redirect::to('inicio');

	}

	/**
	 * Display the specified resource.
	 * GET /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$estudiante = Estudiante::find($id);

        // show the view and pass the nerd to it
        return View::make('estudiantes.verEstudiante')->with('estudiante', $estudiante);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /estudiantes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$estudiante = Estudiante::find($id);

        // show the view and pass the nerd to it
        return View::make('estudiantes.editarEstudiante')->with('estudiante', $estudiante);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$estudiante = Estudiante::find($id);
		$estudiante->nombres = Input::get('nombres');
		$estudiante->apellidos = Input::get('apellidos');
		$estudiante->edad = Input::get('edad');
		$estudiante->fechaNacimiento = Input::get('fechaNacimiento');
		$estudiante->telefono = Input::get('telefono');
		$estudiante->celular = Input::get('celular');
		$estudiante->email = Input::get('email');
		$estudiante->contrasena = Input::get('contrasena');
		$estudiante->sexo = Input::get('sexo');
		$estudiante->codigoPostal = Input::get('codigoPostal');
		$estudiante->estado = Input::get('estado');
		$estudiante->municipio = Input::get('municipio');
		$estudiante->universidad = Input::get('universidad');
		$estudiante->carrera = Input::get('carrera');
		$estudiante->matricula = Input::get('matricula');
		$estudiante->modalidad = Input::get('modalidad');
		$estudiante->grado = Input::get('grado');
		$estudiante->promedio = Input::get('promedio');
		$estudiante->periodo = Input::get('periodo');
		$estudiante->perfil_id = Input::get('perfil_id');
		$estudiante->direccion = Input::get('direccion');
		
		$estudiante->save();

		//echo($estudiante);

		return Redirect::to('perfilEstudiante/'.$estudiante->id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /estudiantes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function aprobarEstudiante($id)
	{
		$estudiante = estudiante::find($id);

		$estudiante->estatus = 1;
		$estudiante->save(); 

		return Redirect::to('validarEstudiantes');

	}

	public function rechazarEstudiante($id)
	{
		$estudiante = estudiante::find($id);

		$estudiante->estatus = 2;
		$estudiante->save(); 

		return Redirect::to('validarEstudiantes');

	}

	public function consultarEstudiante()
	//public function consultarEstudiante($id)
	{
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);

        // show the view and pass the nerd to it
        return View::make('estudiantes.perfilEstudiante')->with('estudiante', $estudiante);

        //return "Hola bitch XD";
	}

	public function ponerEstudiante()
	{
		//
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$perfiles = Perfil::all();
        // show the view and pass the nerd to it
        return View::make('estudiantes.editarEstudiante', array('estudiante'=>$estudiante, 'perfiles'=>$perfiles));

        //return "Hola bitch XD";
	}

	public function seleccionarProyecto()
	{
		//
		$id = Session::get('id');
		$estudiante = Estudiante::find($id);
		$estudiante->proyecto_id = Input::get('proyecto_id');
		$estudiante->save(); 
        // show the view and pass the nerd to it
        return Redirect::to('perfilEstudiante/'.$id);

        //return "Hola bitch XD";
	}

	public function aprobarProyecto($id)
	{
		
		$estudiante = estudiante::find($id);

		$estudiante->estatusProyecto = 1;
		$estudiante->save(); 

		return Redirect::to('aprobarProyectos');

	}

	public function rechazarProyecto($id)
	{
		
		$estudiante = estudiante::find($id);

		$estudiante->estatusProyecto = 2;
		$estudiante->save(); 

		return Redirect::to('aprobarProyectos');

	}		

}