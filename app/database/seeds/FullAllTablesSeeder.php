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
		$actividad1 = Actividad::create(array(
			'nombre'		=>	'Requerimientos',
			'proyecto_id'	=>  $proyecto1->id
			));

		$actividad2 = Actividad::create(array(
			'nombre'		=>	'Diseño',
			'proyecto_id'	=>  $proyecto1->id
			));

		$actividad3 = Actividad::create(array(
			'nombre'		=>	'Diseño',
			'proyecto_id'	=>  $proyecto2->id
			));

		$actividad4 = Actividad::create(array(
			'nombre'		=>	'Pruebas',
			'proyecto_id'	=>  $proyecto2->id
			));

		$actividad5 = Actividad::create(array(
			'nombre'		=>	'Mantenimiento',
			'proyecto_id'	=>  $proyecto3->id
			));

		$actividad6 = Actividad::create(array(
			'nombre'		=>	'Control',
			'proyecto_id'	=>  $proyecto3->id
			));

		$actividad7 = Actividad::create(array(
			'nombre'		=>	'Diseño',
			'proyecto_id'	=>  $proyecto4->id
			));

		$actividad8 = Actividad::create(array(
			'nombre'		=>	'Pruebas',
			'proyecto_id'	=>  $proyecto4->id
			));

		$actividad9 = Actividad::create(array(
			'nombre'		=>	'Requerimientos',
			'proyecto_id'	=>  $proyecto5->id
			));

		$actividad10 = Actividad::create(array(
			'nombre'		=>	'Desarrollo',
			'proyecto_id'	=>  $proyecto5->id
			));

		$actividad11 = Actividad::create(array(
			'nombre'		=>	'Desarrollo',
			'proyecto_id'	=>  $proyecto6->id
			));

		$actividad12 = Actividad::create(array(
			'nombre'		=>	'Mantenimiento',
			'proyecto_id'	=>  $proyecto6->id
			));

		$actividad13 = Actividad::create(array(
			'nombre'		=>	'Pruebas',
			'proyecto_id'	=>  $proyecto7->id
			));

		$actividad14 = Actividad::create(array(
			'nombre'		=>	'Implementacion',
			'proyecto_id'	=>  $proyecto7->id
			));

		$actividad15 = Actividad::create(array(
			'nombre'		=>	'Auditoria',
			'proyecto_id'	=>  $proyecto8->id
			));

		$actividad16 = Actividad::create(array(
			'nombre'		=>	'Diseño',
			'proyecto_id'	=>  $proyecto8->id
			));

		$actividad17 = Actividad::create(array(
			'nombre'		=>	'Requerimientos',
			'proyecto_id'	=>  $proyecto9->id
			));

		$actividad18 = Actividad::create(array(
			'nombre'		=>	'Pruebas',
			'proyecto_id'	=>  $proyecto9->id
			));

		$actividad19 = Actividad::create(array(
			'nombre'		=>	'Desarrollo',
			'proyecto_id'	=>  $proyecto9->id
			));

		$actividad20 = Actividad::create(array(
			'nombre'		=>	'Control',
			'proyecto_id'	=>  $proyecto10->id
			));

		$actividad21 = Actividad::create(array(
			'nombre'		=>	'Diseño',
			'proyecto_id'	=>  $proyecto10->id
			));

		//Llenar perfiles estudiantes

		//Molde perfil
		$perfil1 = Perfil::create(array(
			'nombre'	=>	'programador'
			));

		$perfil2 = Perfil::create(array(
			'nombre'	=>	'diseñador web'
			));

		$perfil3 = Perfil::create(array(
			'nombre'	=>	'especialista en redes'
			));

		$perfil4 = Perfil::create(array(
			'nombre'	=>	'especialista en moviles'
			));

		$perfil5 = Perfil::create(array(
			'nombre'	=>	'diseñador grafico'
			));

		$perfil6 = Perfil::create(array(
			'nombre'	=>	'especialista en linux'
			));



		//Llenar relacion perfil_proyecto
		$table->integer('perfil_id');
		$table->integer('proyecto_id');


		//molde relaciones perfil_proyecto
		//VERIFICAR BIEN ESTA MMDA
		$proyecto1->perfiles()->attach($perfil1->id);
		$proyecto1->perfiles()->attach($perfil2->id);
		$proyecto1->perfiles()->attach($perfil3->id);

		$proyecto2->perfiles()->attach($perfil4->id);
		$proyecto2->perfiles()->attach($perfil5->id);
		$proyecto2->perfiles()->attach($perfil6->id);

		$proyecto3->perfiles()->attach($perfil6->id);
		$proyecto3->perfiles()->attach($perfil5->id);
		$proyecto3->perfiles()->attach($perfil4->id);

		$proyecto4->perfiles()->attach($perfil3->id);
		$proyecto4->perfiles()->attach($perfil2->id);
		$proyecto4->perfiles()->attach($perfil1->id);

		$proyecto5->perfiles()->attach($perfil1->id);
		$proyecto5->perfiles()->attach($perfil2->id);
		$proyecto5->perfiles()->attach($perfil3->id);

		$proyecto6->perfiles()->attach($perfil4->id);
		$proyecto6->perfiles()->attach($perfil5->id);
		$proyecto6->perfiles()->attach($perfil6->id);

		$proyecto7->perfiles()->attach($perfil4->id);
		$proyecto7->perfiles()->attach($perfil5->id);
		$proyecto7->perfiles()->attach($perfil6->id);

		$proyecto8->perfiles()->attach($perfil1->id);
		$proyecto8->perfiles()->attach($perfil2->id);
		$proyecto8->perfiles()->attach($perfil3->id);

		$proyecto9->perfiles()->attach($perfil1->id);
		$proyecto9->perfiles()->attach($perfil3->id);
		$proyecto9->perfiles()->attach($perfil5->id);

		$proyecto10->perfiles()->attach($perfil2->id);
		$proyecto10->perfiles()->attach($perfil4->id);
		$proyecto10->perfiles()->attach($perfil6->id);

		//Llenar planeaciones


		//Molde de planeacion
		$planeacion1 = Planeacion::create(array(
			'porcentaje' 	=> 50,
			'proyecto_id' 	=> $proyecto1->id
			));

		$planeacion2 = Planeacion::create(array(
			'porcentaje' 	=> 10,
			'proyecto_id' 	=> $proyecto2->id
			));

		$planeacion3 = Planeacion::create(array(
			'porcentaje' 	=> 20,
			'proyecto_id' 	=> $proyecto3->id
			));

		$planeacion4 = Planeacion::create(array(
			'porcentaje' 	=> 30,
			'proyecto_id' 	=> $proyecto4->id
			));

		$planeacion5 = Planeacion::create(array(
			'porcentaje' 	=> 40,
			'proyecto_id' 	=> $proyecto5->id
			));

		$planeacion6 = Planeacion::create(array(
			'porcentaje' 	=> 60,
			'proyecto_id' 	=> $proyecto6->id
			));

		$planeacion7 = Planeacion::create(array(
			'porcentaje' 	=> 70,
			'proyecto_id' 	=> $proyecto7->id
			));

		$planeacion8 = Planeacion::create(array(
			'porcentaje' 	=> 80,
			'proyecto_id' 	=> $proyecto8->id
			));

		$planeacion9 = Planeacion::create(array(
			'porcentaje' 	=> 90,
			'proyecto_id' 	=> $proyecto9->id
			));

		$planeacion10 = Planeacion::create(array(
			'porcentaje' 	=> 100,
			'proyecto_id' 	=> $proyecto10->id
			));



		//Llenar estudiantes
		
		//Molde estudiante
		$estudiante1 = Estudiante::create(array(
			'nombres'			=> 'Gael',
			'apellidos'			=> 'Manzanares Quiñones',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'gaelgeovaimq@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Gral. Fco. R. Murguia',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 9,
			'promedio'  		=> 8.95,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto1->id,
			'perfil'			=> $perfil1->id
			));


		$estudiante2 = Estudiante::create(array(
			'nombres'			=> 'Alex',
			'apellidos'			=> 'Ferniza Montes',
			'edad'				=> 21,
			'fechaNacimiento'	=> '1991-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'alex_34@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Guadalupe',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en software',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 8.1,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto1->id,
			'perfil'			=> $perfil2->id
			));

		$estudiante3 = Estudiante::create(array(
			'nombres'			=> 'Enrique',
			'apellidos'			=> 'Lopez Martinez',
			'edad'				=> 23,
			'fechaNacimiento'	=> '1994-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'kike_234@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Ojo caliete',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en computacion',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 9,
			'promedio'  		=> 7.2,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto2->id,
			'perfil'			=> $perfil3->id
			));

		$estudiante4 = Estudiante::create(array(
			'nombres'			=> 'Lucero',
			'apellidos'			=> 'Castañeda Obregon',
			'edad'				=> 20,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'lucerocro@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Zacatecas',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en software',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 9.7,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto2->id,
			'perfil'			=> $perfil4->id
			));

		$estudiante5 = Estudiante::create(array(
			'nombres'			=> 'Gamaliel',
			'apellidos'			=> 'Ovalle Ramirez',
			'edad'				=> 19,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'gama_like@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Rio Grande',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en computacion',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 7,
			'promedio'  		=> 6.0,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto3->id,
			'perfil'			=> $perfil5->id
			));

		$estudiante6 = Estudiante::create(array(
			'nombres'			=> 'Gabriel',
			'apellidos'			=> 'Fernandez Godinez',
			'edad'				=> 21,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'godinez123@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Rio Grande',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en software',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 9,
			'promedio'  		=> 8.7,
			'periodo'			=> 'AGO-DIC-14',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto3->id,
			'perfil'			=> $perfil6->id
			));

		$estudiante7 = Estudiante::create(array(
			'nombres'			=> 'Eduardo Alberto',
			'apellidos'			=> 'Martinez Falcon',
			'edad'				=> 20,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'lalo1234@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Loreto',
			'universidad'		=> 'UAZ',
			'carrera'			=> 'Ingenieria en software',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 7.9,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto4->id,
			'perfil'			=> $perfil6->id
			));

		$estudiante8 = Estudiante::create(array(
			'nombres'			=> 'Alejandro',
			'apellidos'			=> 'Prado Lopez',
			'edad'				=> 21,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'najkachi@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Juan Aldama',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 9.0,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto4->id,
			'perfil'			=> $perfil5->id
			));

		$estudiante9 = Estudiante::create(array(
			'nombres'			=> 'Carlos',
			'apellidos'			=> 'Davila Solis',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'karlos222@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Zacatecas',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 7.0,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto5->id,
			'perfil'			=> $perfil4->id
			));

		$estudiante10 = Estudiante::create(array(
			'nombres'			=> 'Alan Michell',
			'apellidos'			=> 'Martinez Lopez',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'sex_zorro@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Rio Grande',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 7.4,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto5->id,
			'perfil'			=> $perfil3->id
			));

		$estudiante11 = Estudiante::create(array(
			'nombres'			=> 'Cristian',
			'apellidos'			=> 'Hernandez Orozco',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'krizrocker@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Rio Grande',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 8.1,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto6->id,
			'perfil'			=> $perfil2->id
			));

		$estudiante12 = Estudiante::create(array(
			'nombres'			=> 'Fernando',
			'apellidos'			=> 'Flores Rojas',
			'edad'				=> 20,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'ferfloro@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Jalpa',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 9,
			'promedio'  		=> 8.5,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto6->id,
			'perfil'			=> $perfil1->id
			));

		$estudiante13 = Estudiante::create(array(
			'nombres'			=> 'Karen',
			'apellidos'			=> 'Lara Lopez',
			'edad'				=> 20,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'karen12@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Guadalupe',
			'universidad'		=> 'UPIIZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 6.0,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto7->id,
			'perfil'			=> $perfil1->id
			));

		$estudiante14 = Estudiante::create(array(
			'nombres'			=> 'Daniel',
			'apellidos'			=> 'Flores Flores',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'danii23@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Gral. Fco. R. Murguia',
			'universidad'		=> 'UTEZ',
			'carrera'			=> 'Ingenieria en mantenimiento preventivo',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Cuatrimestre',
			'grado'				=> 10,
			'promedio'  		=> 9.3,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto7->id,
			'perfil'			=> $perfil2->id
			));

		$estudiante15 = Estudiante::create(array(
			'nombres'			=> 'German',
			'apellidos'			=> 'Rodriguez Sauza',
			'edad'				=> 23,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'lobo_dark@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Tepechital',
			'universidad'		=> 'UTEZ',
			'carrera'			=> 'Ingenieria en electronica',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Cuatrimestre',
			'grado'				=> 8,
			'promedio'  		=> 9.0,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto7->id,
			'perfil'			=> $perfil3->id
			));

		$estudiante16 = Estudiante::create(array(
			'nombres'			=> 'Paul Rodolfo',
			'apellidos'			=> 'Mendoza Castañeda',
			'edad'				=> 23,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'paulLopez@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Luis Moya',
			'universidad'		=> 'UTEZ',
			'carrera'			=> 'Ingenieria en aeronautica',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Cuatrimestre',
			'grado'				=> 8,
			'promedio'  		=> 7.6,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto8->id,
			'perfil'			=> $perfil4->id
			));

		$estudiante17 = Estudiante::create(array(
			'nombres'			=> 'Yajaira',
			'apellidos'			=> 'Sauceda Gonzales',
			'edad'				=> 23,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'yaja12@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Guadalupe',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en sistemas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 7.9,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto8->id,
			'perfil'			=> $perfil5->id
			));

		$estudiante18 = Estudiante::create(array(
			'nombres'			=> 'Jorge',
			'apellidos'			=> 'Ovalle Amaya',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'jra@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Gral. Fco. R. Murguia',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en mecatronica',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 9.3,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto8->id,
			'perfil'			=> $perfil6->id
			));

		$estudiante19 = Estudiante::create(array(
			'nombres'			=> 'Braulio German',
			'apellidos'			=> 'Ovalle Amaya',
			'edad'				=> 23,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'balones09@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Jerez',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en Matematicas',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 8.4,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto9->id,
			'perfil'			=> $perfil6->id
			));

		$estudiante20 = Estudiante::create(array(
			'nombres'			=> 'Oscar Raudel',
			'apellidos'			=> 'Delgadillo Rubalcaba',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'teti.ol@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Tepechitlan',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en Mantenimiento',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 9.0,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto9->id,
			'perfil'			=> $perfil5->id
			));

		$estudiante21 = Estudiante::create(array(
			'nombres'			=> 'Octavio',
			'apellidos'			=> 'Zapata Mireles',
			'edad'				=> 24,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'zapata33@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Jerez',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en diseño motriz',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 7.4,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto9->id,
			'perfil'			=> $perfil4->id
			));

		$estudiante22= Estudiante::create(array(
			'nombres'			=> 'Jesus',
			'apellidos'			=> 'Alvarado Romero',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'chuy.loki@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'M',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Pinos',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en computacion',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 9,
			'promedio'  		=> 7.3,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto10->id,
			'perfil'			=> $perfil3->id
			));

		$estudiante23 = Estudiante::create(array(
			'nombres'			=> 'Ariana',
			'apellidos'			=> 'Martinez Balderas',
			'edad'				=> 22,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'minuscula123@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Jerez',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en metalurgia',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 8,
			'promedio'  		=> 8.8,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto10->id,
			'perfil'			=> $perfil2->id
			));

		$estudiante24 = Estudiante::create(array(
			'nombres'			=> 'Alejandra',
			'apellidos'			=> 'Orozco Lopez',
			'edad'				=> 27,
			'fechaNacimiento'	=> '1992-01-02',
			'telefono'			=> 4989355490,
			'celular'			=> 4921611742,
			'correo'			=> 'ninaroja@gmai.com',
			'contraseña'		=> '123456',
			'sexo'				=> 'F',
			'codigoPostal'		=> 98350,
			'estado'			=> 'Zacatecas',
			'municipio'			=> 'Sombrerete',
			'universidad'		=> 'ITZ',
			'carrera'			=> 'Ingenieria en mecatronica',
			'matricula'			=> '2011670055',
			'modalidad'			=> 'Semestre',
			'grado'				=> 7,
			'promedio'  		=> 8.3,
			'periodo'			=> 'ENE-JUL-15',
			'estatus'			=> 1,
			'estatusProyecto'	=> 1,
			'proyecto_id'		=> $proyecto10->id,
			'perfil'			=> $perfil1->id
			));


			
			//Llenar tareas

			//molde de tarea
			$tarea1 = Tarea::create(array(
				'nombre' 		=> 'Levantamiento de requerimientos',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion1->id,
				'estudiante_id'	=> $estudiante1->id
				));
			$tarea2 = Tarea::create(array(
				'nombre' 		=> 'Desarrollo de la arquitectura',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion1->id,
				'estudiante_id'	=> $estudiante1->id
				));
			$tarea3 = Tarea::create(array(
				'nombre' 		=> 'Pruebas unitarias',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion1->id,
				'estudiante_id'	=> $estudiante2->id
				));

			$tarea4 = Tarea::create(array(
				'nombre' 		=> 'Pruebas beta',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion2->id,
				'estudiante_id'	=> $estudiante3->id
				));
			$tarea5 = Tarea::create(array(
				'nombre' 		=> 'Desarrollo de interfaz grafica',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion2->id,
				'estudiante_id'	=> $estudiante3->id
				));
			$tarea6 = Tarea::create(array(
				'nombre' 		=> 'Llenado de plantillas para pruebas',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion2->id,
				'estudiante_id'	=> $estudiante4->id
				));

			$tarea7 = Tarea::create(array(
				'nombre' 		=> 'Documentancion de clases',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion3->id,
				'estudiante_id'	=> $estudiante5->id
				));
			$tarea8 = Tarea::create(array(
				'nombre' 		=> 'Manual del sistema',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion3->id,
				'estudiante_id'	=> $estudiante5->id
				));
			$tarea9 = Tarea::create(array(
				'nombre' 		=> 'Soldadura de placa',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion3->id,
				'estudiante_id'	=> $estudiante6->id
				));

			$tarea10 = Tarea::create(array(
				'nombre' 		=> 'Integracion de placa base',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion4->id,
				'estudiante_id'	=> $estudiante7->id
				));
			$tarea11 = Tarea::create(array(
				'nombre' 		=> 'Pruebas de estres',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion4->id,
				'estudiante_id'	=> $estudiante7->id
				));
			$tarea12 = Tarea::create(array(
				'nombre' 		=> 'Levantamiento de Requerimientos',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion4->id,
				'estudiante_id'	=> $estudiante8->id
				));

			$tarea13 = Tarea::create(array(
				'nombre' 		=> 'Validacion de historias de usuario',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion5->id,
				'estudiante_id'	=> $estudiante9->id
				));
			$tarea14 = Tarea::create(array(
				'nombre' 		=> 'Estimacion de requerimientos',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion5->id,
				'estudiante_id'	=> $estudiante9->id
				));
			$tarea15 = Tarea::create(array(
				'nombre' 		=> 'Estimacion de componentes',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion5->id,
				'estudiante_id'	=> $estudiante10->id
				));

			$tarea16 = Tarea::create(array(
				'nombre' 		=> 'Desarrollo de componete de logica',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion6->id,
				'estudiante_id'	=> $estudiante11->id
				));
			$tarea17 = Tarea::create(array(
				'nombre' 		=> 'Diseño de la base de datos',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion6->id,
				'estudiante_id'	=> $estudiante11->id
				));
			$tarea18 = Tarea::create(array(
				'nombre' 		=> 'Diagramas de clases',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion6->id,
				'estudiante_id'	=> $estudiante12->id
				));

			$tarea19 = Tarea::create(array(
				'nombre' 		=> 'Diagrama entida relacion',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion7->id,
				'estudiante_id'	=> $estudiante13->id
				));
			$tarea20 = Tarea::create(array(
				'nombre' 		=> 'capacitacion en laravel',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion7->id,
				'estudiante_id'	=> $estudiante14->id
				));
			$tarea21 = Tarea::create(array(
				'nombre' 		=> 'capacitacion en mongodb',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion7->id,
				'estudiante_id'	=> $estudiante15->id
				));

			$tarea22 = Tarea::create(array(
				'nombre' 		=> 'Implementacion de repositorio',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion8->id,
				'estudiante_id'	=> $estudiante16->id
				));
			$tarea23 = Tarea::create(array(
				'nombre' 		=> 'Configuracion del servidor',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion8->id,
				'estudiante_id'	=> $estudiante17->id
				));
			$tarea24 = Tarea::create(array(
				'nombre' 		=> 'motar servicios de correo',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion8->id,
				'estudiante_id'	=> $estudiante18->id
				));

			$tarea25 = Tarea::create(array(
				'nombre' 		=> 'montar servicio de dns',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion9->id,
				'estudiante_id'	=> $estudiante19->id
				));
			$tarea26 = Tarea::create(array(
				'nombre' 		=> 'Formateo de servidor',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion9->id,
				'estudiante_id'	=> $estudiante20->id
				));
			$tarea27 = Tarea::create(array(
				'nombre' 		=> 'Manual del sistema embebido',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion9->id,
				'estudiante_id'	=> $estudiante21->id
				));

			$tarea28 = Tarea::create(array(
				'nombre' 		=> 'Pruebas unitarias de estres',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion10->id,
				'estudiante_id'	=> $estudiante22->id
				));
			$tarea29 = Tarea::create(array(
				'nombre' 		=> 'presentacion del proyecto',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion10->id,
				'estudiante_id'	=> $estudiante23->id
				));
			$tarea30 = Tarea::create(array(
				'nombre' 		=> 'Desarrollo de base de modelos',
				'porcentaje'	=> 20,
				'tiempo'		=> 7,
				'estatus'		=> 1,
				'planeacion_id'	=> $planeacion10->id,
				'estudiante_id'	=> $estudiante24->id
				));

			

		//Llenar becas

		//Molde becas

		$beca1 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante1->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca2 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante2->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca3 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante3->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca4 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante4->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca5 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante5->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca6 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante6->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca7 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante7->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca8 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante8->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca9 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante9->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca10 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante10->id,
			'periodo'			=> 'AGO-DIC-14'
			));

		$beca11 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante11->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca12 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante12->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca13 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante13->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca14 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante14->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca15 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante15->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca16 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante16->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca17 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante17->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca18 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante18->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca19 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante19->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca20 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante20->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca21 = Beca::create(array(
			'perfil'			=> 'LABSOL', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante21->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca22 = Beca::create(array(
			'perfil'			=> 'COZCYT', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante22->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca23 = Beca::create(array(
			'perfil'			=> 'COZCYT', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante23->id,
			'periodo'			=> 'ENE-JUL-15'
			));

		$beca24 = Beca::create(array(
			'perfil'			=> 'COZCYT', //LabSol, Cozcyt, otro.
			'cartaSolicitud'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'curp'				=> 'http://GESOL.org.mx/curp.pdf',
			'ife'				=> 'http://GESOL.org.mx/ife.pdf',
			'cartaPrestacion'	=> 'http://GESOL.org.mx/cartaPrestacion.pdf',
			'cartaAceptacion'	=> 'http://GESOL.org.mx/cartaSolicitud.pdf',
			'estudiante_id'		=> $estudiante24->id,
			'periodo'			=> 'ENE-JUL-15'
			));
		
	}

}