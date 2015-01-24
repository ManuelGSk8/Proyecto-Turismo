<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionComentariosPaquete extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ValoracionComenPaquete', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('paquete_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paqueteturistico');
            $table->string('comentarios');
            $table->string('valoracion');
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
	   Schema::drop('ValoracionComenPaquete');
	}

}
