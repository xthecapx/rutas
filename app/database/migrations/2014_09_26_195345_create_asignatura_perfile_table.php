<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaPerfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignatura_perfile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asignatura_id')->unsigned()->index();
			$table->foreign('asignatura_id')->references('id')->on('asignaturas');
			$table->integer('perfile_id')->unsigned()->index();
			$table->foreign('perfile_id')->references('id')->on('perfiles');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignatura_perfile');
	}

}
