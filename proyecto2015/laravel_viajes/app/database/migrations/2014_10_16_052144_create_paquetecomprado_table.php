<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetecompradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paquetecomprado', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('user');
            $table->integer('id_paquete')->unsigned();
            $table->foreign('id_paquete')->references('id')->on('paqueteturistico');
            $table->string('codigo_compra');
            $table->enum('estado_compra',['aprobado','rechazado','cancelado']);

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
		Schema::drop('paquetecomprado');
	}

}
