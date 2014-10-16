<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLugardetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lugardetalle', function(Blueprint $table)
		{
			$table->integer('id_paquete_det')->unsigned();
            $table->foreign('id_paquete_det')->references('id')->on('paquetedetalle');
            $table->integer('id_lugar')->unsigned();
            $table->foreign('id_lugar')->references('id')->on('lugaresturisticos');
            $table->text('descripcion')->nullable();

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
		Schema::drop('lugardetalle');
	}

}
