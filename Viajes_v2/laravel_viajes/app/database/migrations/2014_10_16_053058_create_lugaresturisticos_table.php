<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLugaresturisticosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lugaresturisticos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre_lugar')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categoria');
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
		Schema::drop('lugaresturisticos');
	}

}
