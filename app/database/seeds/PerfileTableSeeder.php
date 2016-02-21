<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PerfileTableSeeder extends Seeder {

	public function run()
	{
		DB::table('perfiles')->delete();
		$faker = Faker::create();

		Perfile::create([
			'perfil' => 'Cárnicos',
			'programa_id' => '64',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Cárnicos no alimentario',
			'programa_id' => '64',
			'total_creditos' => '9',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Vegetales',
			'programa_id' => '64',
			'total_creditos' => '9',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Lácteos',
			'programa_id' => '64',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Ambiental',
			'programa_id' => '4',
			'total_creditos' => '3',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Economía',
			'programa_id' => '4',
			'total_creditos' => '8',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Diseño y uso',
			'programa_id' => '32',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Diseño y producción',
			'programa_id' => '32',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Proyecto y prospectiva',
			'programa_id' => '32',
			'total_creditos' => '45',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Suelos',
			'programa_id' => '25',
			'total_creditos' => '13',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Procesos agroindustriales',
			'programa_id' => '25',
			'total_creditos' => '6',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Maquinaria, mecanización y fuentes de energía',
			'programa_id' => '25',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Energías alternativas',
			'programa_id' => '48',
			'total_creditos' => '9',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Suelos y aguas',
			'programa_id' => '48',
			'total_creditos' => '6',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Recursos Hidrícos',
			'programa_id' => '48',
			'total_creditos' => '9',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Ecosistemas Marinos',
			'programa_id' => '48',
			'total_creditos' => '6',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Seguridad Alimentaria',
			'programa_id' => '40',
			'total_creditos' => '6',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Producción de materias primas vegetales',
			'programa_id' => '40',
			'total_creditos' => '9',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);	

		Perfile::create([
			'perfil' => 'Servicios tecnológicos',
			'programa_id' => '40',
			'total_creditos' => '15',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Sistemas de Producción Pecuaria',
			'programa_id' => '22',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Nutrición animal',
			'programa_id' => '22',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

		Perfile::create([
			'perfil' => 'Recursos Genéticos',
			'programa_id' => '22',
			'total_creditos' => '12',
			'descripcion' => $faker->paragraph($nbSentences = 3)
		]);

	}
}