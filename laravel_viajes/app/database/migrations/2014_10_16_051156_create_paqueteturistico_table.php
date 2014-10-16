<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaqueteturisticoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paqueteturistico', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre_paquete');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin')->nullable();
            $table->text('info_basica')->nullable();
            $table->decimal('precio')->nullable();
            $table->string('region')->nullable();
            $table->string('duracion_paquete')->nullable();
            $table->enum('estado',['activo','desactivado']);
            $table->string('foto_paquete')->nullable();
            $table->integer('agencia_id')->unsigned();
            $table->foreign('agencia_id')->references('id')->on('agenciaturistica');
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
		Schema::drop('paqueteturistico');
	}

}
