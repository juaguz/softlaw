<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre');
			$table->string('apellido');
			$table->string('nro_documento')->unique('nro_documento');
			$table->string('email');
			$table->string('nombre_usuario')->unique('nombre_usuario');
			$table->string('password');
			$table->boolean('habilitado');
			$table->integer('perfil');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
