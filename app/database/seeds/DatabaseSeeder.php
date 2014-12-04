<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('ProyectosTableSeeder');
		$this->call('PlaneacionesTableSeeder');
		$this->command->info('GESOL app seeds finished.');
	}

}
