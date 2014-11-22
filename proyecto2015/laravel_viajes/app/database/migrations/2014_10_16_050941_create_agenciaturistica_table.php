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
		Schema::create('agenciaturisticas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('ruc');
            $table->string('razon_social');
            $table->string('nombre_Comercial');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('contacto');
            $table->string('web');

           // $table->string('latitud');
           // $table->string('longitud');
            $table->string('foto');
            $table->foreign('id_usuario')->references('id')->on('user');
            $table->integer('id_usuario')->unsigned();
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
		Schema::drop('agenciaturisticas');
	}

}
