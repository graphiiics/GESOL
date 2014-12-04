<?php

class FullAllTablesSeeder extends Seeder {

	public function run()
	{
		//Limpiar la tabla 
		DB::table('proyectos')->delete();
		DB::table('actividades')->delete();
		DB::table('perfiles')->delete();
		DB::table('perfil_proyecto')->delete();
		DB::table('planeaciones')->delete();
		DB::table('tareas')->delete();
		DB::table('estudiantes')->delete();
		DB::table('becas')->delete();



		//LLenar proyectos
		$proyecto1 = Proyecto::create(array(


			'nombre'			=>	'proyecto 1',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'software',
			'duracion'			=>	6,
			'numeroIntegrantes'	=>	4,
			'objetivo'			=>	'Objetivo proyecto 1',
			'descripcion'		=>	'Descripcion proyecto 1'

			));

		$proyecto2 = Proyecto::create(array(


			'nombre'			=>	'proyecto 2',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	9,
			'numeroIntegrantes'	=>	2,
			'objetivo'			=>	'Objetivo proyecto 2',
			'descripcion'		=>	'Descripcion proyecto 2'

			));

		$proyecto3 = Proyecto::create(array(


			'nombre'			=>	'proyecto 3',
			'dependencia'		=>	'cozcyt',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	4,
			'numeroIntegrantes'	=>	1,
			'objetivo'			=>	'objetivo proyecto 3',
			'descripcion'		=>	'descripcion proyecto 3'

			));

		$proyecto4 = Proyecto::create(array(


			'nombre'			=>	'proyecto 4',
			'dependencia'		=>	'gobierno',
			'tipoProyecto'		=>	'linux',
			'duracion'			=>	8,
			'numeroIntegrantes'	=>	3,
			'objetivo'			=>	'objetivo proyecto 4',
			'descripcion'		=>	'descripcion proyecto 4'

			));

		$proyecto5 = Proyecto::create(array(


			'nombre'			=>	'proyecto 5',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	5,
			'numeroIntegrantes'	=>	3,
			'objetivo'			=>	'objetivo proyecto 5',
			'descripcion'		=>	'descripcion proyecto 5'

			));

		$proyecto6 = Proyecto::create(array(


			'nombre'			=>	'proyecto 6',
			'dependencia'		=>	'gobierno',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	5,
			'objetivo'			=>	'objetivo proyecto 6',
			'descripcion'		=>	'descripcion proyecto 6'

			));


		$proyecto7 = Proyecto::create(array(


			'nombre'			=>	'proyecto 7',
			'dependencia'		=>	'cozcyt',
			'tipoProyecto'		=>	'software',
			'duracion'			=>	9,
			'numeroIntegrantes'	=>	6,
			'objetivo'			=>	'objetivo proyecto 7',
			'descripcion'		=>	'descripcion proyecto 7'

			));

		$proyecto8 = Proyecto::create(array(


			'nombre'			=>	'proyecto 8',
			'dependencia'		=>	'intel',
			'tipoProyecto'		=>	'linux',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	9,
			'objetivo'			=>	'objetivo proyecto 8',
			'descripcion'		=>	'descripcion proyecto 8'

			));

		$proyecto9 = Proyecto::create(array(


			'nombre'			=>	'proyecto 9',
			'dependencia'		=>	'intel',
			'tipoProyecto'		=>	'hardware',
			'duracion'			=>	8,
			'numeroIntegrantes'	=>	4,
			'objetivo'			=>	'objetivo proyecto 9',
			'descripcion'		=>	'descripcion proyecto 9'

			));

		$proyecto10 = Proyecto::create(array(


			'nombre'			=>	'proyecto 10',
			'dependencia'		=>	'labsol',
			'tipoProyecto'		=>	'redes',
			'duracion'			=>	10,
			'numeroIntegrantes'	=>	9,
			'objetivo'			=>	'objetivo proyecto 10',
			'descripcion'		=>	'descripcion proyecto 10'

			));

		$this->command->info('El catalogo de proyectos esta listo!');


		//Llenar actividades de los proyectos

		//molde actividad
		$actividad = Actividad::create(array(
			'nombre'		=>	'',
			'proyecto_id'	=>  $proyecto->id
			));

		//Llenar perfiles estudiantes

		//Molde perfil
		$perfil = Perfil::create(array(
			'nombre'	=>	''
			));



		//Llenar relacion perfil_proyecto
		$table->integer('perfil_id');
		$table->integer('proyecto_id');

		//molde relaciones perfil_proyecto
		//BERFICAR BIEN ESTA MMDA
		$proyecto->perfiles()->attach($perfil->id);

		//Llenar planeaciones
		$table->integer('porcentaje');
		$table->integer('proyecto_id');


		//Llenar tareas
		$table->string('nombre');
		$table->integer('porcentaje');
		$table->integer('tiempo');
		$table->boolean('estatus');
		$table->integer('planeacion_id');
		$table->integer('estudiante_id');

		//Llenar estudiantes
		$table->string('nombres');
		$table->string('apellidos');
		$table->integer('edad');
		$table->date('fechaNacimiento');
		$table->integer('telefono');
		$table->integer('celular');
		$table->string('correo');
		$table->string('contrasena');
		$table->char('sexo');
		$table->integer('codigoPostal');
		$table->string('estado');
		$table->string('municipio');
		$table->string('universidad');
		$table->string('carrera');
		$table->string('matricula');
		$table->string('modalidad');
		$table->integer('grado');
		$table->double('promedio');
		$table->string('periodo');
		$table->boolean('estatus');
		$table->boolean('estatusProyecto');
		$table->integer('proyecto_id');
		$table->integer('perfil_id');

		//Llenar becas
		$table->string('perfil');
		$table->string('cartaSolicitud');
		$table->string('curp');
		$table->string('ife');
		$table->string('cartaPrestacion');
		$table->string('cartaAceptacion');
		$table->integer ('estudiante_id');
		$table->string ('periodo');



		
	}

}