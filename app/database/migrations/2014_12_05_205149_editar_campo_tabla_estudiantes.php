<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditarCampoTablaEstudiantes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			//
			$table->renameColumn('correo', 'email')->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			//
		});
	}

}
