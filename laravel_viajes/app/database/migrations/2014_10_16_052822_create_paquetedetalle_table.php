<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetedetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paquetedetalle', function(Blueprint $table)
		{
			$table->increments('id');
            $table->time('hora');
            $table->text('descripcion');
            $table->string('detalle_col');
            $table->integer('id_paquete_turistico')->unsigned();
            $table->foreign('id_paquete_turistico')->references('id')->on('paqueteturistico');
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
		Schema::drop('paquetedetalle');
	}

}
