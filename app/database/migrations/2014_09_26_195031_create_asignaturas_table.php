<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignaturas', function(Blueprint $table)
		{
			$table->increments('id');
			//$table->integer('id')->unsigned();
			//$table->primary('id'); //Codigo asignatura
			//$table->integer('rasig_id')->unsigned()->index();
			//$table->foreign('rasig_id')->references('id')->on('asignaturas')->onDelete('cascade');
			$table->string('asignatura_id');
			$table->string('asignatura');
			$table->integer('creditos');
			$table->string('tipologia');
			$table->string('descripcion');
			$table->string('agrupacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignaturas');
	}

}
