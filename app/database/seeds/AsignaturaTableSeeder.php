<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AsignaturaTableSeeder extends Seeder {

	public function run()
	{
		DB::table('asignaturas')->delete();
		
		Asignatura::create([
				'asignatura' => 'Agroindustria de productos pesqueros: productos alimenticios',
				'id' => '5001051',
				'rasig_id' => '5001050',
				'creditos' => '3'
		]);
		
		Asignatura::create([
				'asignatura' => 'Propiedades físicas y mecánicas de productos biológicos',
				'id' => '5001050',
				'rasig_id' => '5001051',
				'creditos' => '3'
		]);
		
		Asignatura::create([
				'asignatura' => 'Biotecnología de las fermentaciones',
				'id' => '5000899',
				'rasig_id' => '5001050',
				'creditos' => '3'
		]);
		
		Asignatura::create([
				'asignatura' => 'Enzimología',
				'id' => '5000903',
				'rasig_id' => '5001050',
				'creditos' => '3'
		]);

		Asignatura::create([
				'asignatura' => 'Agroindustria de curtiembres',
				'id' => '5000898',
				'rasig_id' => '5001050',
				'creditos' => '3'
		]);

		Asignatura::create([
				'asignatura' => 'Gestión de la producción y la calidad',
				'id' => '5000861',
				'rasig_id' => '5001050',
				'creditos' => '3'
		]);

		Asignatura::create([
				'asignatura' => 'Ingeniería de poscosecha de granos y semillas',
				'id' => '5000913',
				'creditos' => '3'
		]);

		Asignatura::create([
				'asignatura' => 'Agroindustria de frutas y hortalizas',
				'id' => '5000895',
				'creditos' => '3'
		]);

		Asignatura::create([
				'asignatura' => 'Tecnología de leches',
				'id' => '5000834',
				'creditos' => '3'
		]);
	}
}