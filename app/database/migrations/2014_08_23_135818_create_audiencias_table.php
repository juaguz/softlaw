<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAudienciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audiencias', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_juicio');
			$table->date('fecha');
			$table->time('hora');
			$table->integer('id_usuario');
			$table->text('descripcion');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('audiencias');
	}

}
