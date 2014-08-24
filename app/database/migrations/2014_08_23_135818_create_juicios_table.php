<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('juicios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('partes');
			$table->integer('id_fuero');
			$table->integer('id_juzgado');
			$table->integer('piso');
			$table->string('nro_expediente');
			$table->integer('id_dpto_judicial');
			$table->integer('id_etapa');
			$table->integer('id_proce');
			$table->integer('carp');
			$table->integer('id_estado');
			$table->text('observaciones');
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
		Schema::drop('juicios');
	}

}
