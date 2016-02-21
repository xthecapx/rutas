<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProgramaTableSeeder extends Seeder {

	public function run()
	{
		DB::table('programas')->delete();
		$faker = Faker::create();

		Programa::create(array(
			'id' => '64',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5137',
			'facultad' => 'Ingeniería y Administración',
			'programa' => 'Ingeniería Agroindustrial'
		));

		Programa::create(array(
			'id' => '4',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5137',
			'facultad' => 'Ingeniería y Administración',
			'programa' => 'Administración de empresas'
		));

		Programa::create(array(
			'id' => '32',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5137',
			'facultad' => 'Ingeniería y Administración',
			'programa' => 'Diseño Industrial'
		));

		Programa::create(array(
			'id' => '25',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5137',
			'facultad' => 'Ingeniería y Administración',
			'programa' => 'Ingeniería Agrícola'
		));

		Programa::create(array(
			'id' => '48',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5137',
			'facultad' => 'Ingeniería y Administración',
			'programa' => 'Ingeniería Ambiental'
		));

		Programa::create(array(
			'id' => '40',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5128',
			'facultad' => 'Ciencias Agropecuarias',
			'programa' => 'Ingeniería Agronómica'
		));

		Programa::create(array(
			'id' => '22',
			'sede_id' => '5',
			'sede' => 'Palmira',
			'facultad_id' => '5128',
			'facultad' => 'Ciencias Agropecuarias',
			'programa' => 'Zootecnia'
		));


		foreach(range(1, 4) as $index)
		{
			Programa::create(array(
				'id' => $faker->numberBetween($min = 10000, $max = 99999),
				'sede_id' => $faker->numberBetween($min = 1, $max = 7),
				'sede' => 'Sede ' . $faker->randomLetter,
				'facultad_id' => $faker->numberBetween($min = 1000, $max = 9999),
				'facultad' =>  'Facultad ' . $faker->randomLetter,
				'programa' => 'Programa ' . $faker->randomLetter
			));
		}
	}

}