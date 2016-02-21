<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgramasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programas', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->primary('id'); // Unión de sede_id, facultad_id, programa_id
			$table->string('sede_id');
			$table->string('sede');
			$table->string('facultad_id');
			$table->string('facultad');
			$table->string('programa_id');
			$table->string('programa');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programas');
	}

}
