<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bases', function(Blueprint $table)
		{
			$table->string('sede');
			$table->integer('codigo_sede');
			$table->string('facultad');
			$table->bigInteger('codigo_facultad');
			$table->string('programa');
			$table->integer('codigo_programa');
			$table->string('perfil');
			$table->longText('descripcion_perfil');
			$table->integer('codigo_asignatura');
			$table->string('asignatura');
			$table->string('tipologia');
			$table->string('agrupacion');
			$table->integer('creditos_asignatura');
			$table->integer('total_credito_perfil');
			$table->string('prerequisito');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bases');
	}

}
