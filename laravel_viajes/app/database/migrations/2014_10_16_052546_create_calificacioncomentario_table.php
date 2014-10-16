<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalificacioncomentarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calificacioncomentario', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('comentario');
            $table->integer('valoracion');
            $table->integer('id_paquete_comprado')->unsigned();
            $table->foreign('id_paquete_comprado')->references('id')->on('paquetecomprado');
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
		Schema::drop('calificacioncomentario');
	}

}
