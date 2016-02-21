<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAequivalenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aequivalencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('equivalenciaId')->unsigned()->index();
			$table->foreign('equivalenciaId')->references('id')->on('equivalencias');
			$table->string('codigoAsignaturaOrigen');
			$table->string('asignaturaOrigen');
			$table->string('codigoAsignaturaDestino');
			$table->string('asignaturaDestino');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aequivalencias');
	}

}
