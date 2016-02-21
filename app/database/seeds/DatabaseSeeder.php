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

		$this->call('ProgramaTableSeeder');
		$this->call('PerfileTableSeeder');
		//$this->call('AsignaturaTableSeeder');
		//$this->call('RequisitoTableSeeder');
		//$this->call('AfinidadeTableSeeder');
	}

}
