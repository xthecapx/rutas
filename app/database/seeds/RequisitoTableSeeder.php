<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RequisitoTableSeeder extends Seeder {

	public function run()
	{
		DB::table('requisitos')->delete();
		$faker = Faker::create();

		Requisito::create([
			'requisito' => 'Cursar Física Mecánica'
		]);

		Requisito::create([
			'requisito' => 'Cursar Bioquímica'
		]);

		Requisito::create([
			'requisito' => 'Cursar Química agroindustrial'
		]);
	}
}