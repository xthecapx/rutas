<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAfinidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('afinidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idSedeOrigen');
			$table->string('SedeOrigen');
			$table->integer('idProgramaOrigen');
			$table->string('programaOrigen');
			$table->integer('idProgramaDestino');
			$table->string('programaDestino');
			$table->integer('creditosExigidosOrigen');
			$table->integer('creditosExigidosDestino');
			$table->integer('comunOrigenDestino');
			$table->integer('errorOrigenDestino');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('afinidades');
	}

}
