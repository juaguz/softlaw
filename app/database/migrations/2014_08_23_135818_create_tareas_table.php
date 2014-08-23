<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTareasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tareas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_juicio');
			$table->integer('id_usuario_asignado');
			$table->date('fecha_vto');
			$table->time('hora_vto');
			$table->integer('id_tipo_tarea');
			$table->text('descripcion');
			$table->integer('realizada')->default(0);
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
		Schema::drop('tareas');
	}

}
