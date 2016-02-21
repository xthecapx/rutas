<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AfinidadeTableSeeder extends Seeder {

	public function run()
	{
		DB::table('afinidades')->delete();
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			Afinidade::create([
				'carrera_id' => '1',
				'afinidade' => 'Ingeniería ' . $faker->randomLetter,
				'p_afinidad' => $faker->numberBetween($min = 70, $max = 100)
			]);
		}
	}

}