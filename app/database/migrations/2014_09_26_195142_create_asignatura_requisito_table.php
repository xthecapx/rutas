<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaRequisitoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignatura_requisito', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asignatura_id')->unsigned()->index();
			$table->foreign('asignatura_id')->references('id')->on('asignaturas');
			$table->integer('requisito_id')->unsigned()->index();
			$table->foreign('requisito_id')->references('id')->on('requisitos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignatura_requisito');
	}

}
