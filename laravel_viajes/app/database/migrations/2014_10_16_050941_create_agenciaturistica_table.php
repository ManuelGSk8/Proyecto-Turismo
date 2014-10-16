<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciaturisticaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenciaturistica', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('ruc');
            $table->string('razon_social');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('encargado');
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
		Schema::drop('agenciaturistica');
	}

}
