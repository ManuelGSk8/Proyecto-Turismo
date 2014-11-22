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
            $table->dateTime('fecha_inicio')->nullable();
            $table->dateTime('fecha_fin')->nullable();
            $table->text('info_basica')->nullable();
            $table->decimal('precio')->nullable();
            $table->string('region')->nullable();
            $table->integer('duracion_paqueteDias');
            $table->integer('duracion_paqueteNoches');
            $table->enum('estado',['activo','desactivado']);
            $table->string('foto_paquete_android')->nullable();
            $table->string('foto_paquete')->nullable();
            $table->string('promocion')->nullable();
            $table->string('descuentoPorc')->nullable();
            $table->integer('agencia_id')->unsigned();
            $table->foreign('agencia_id')->references('id')->on('agenciaturisticas');
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
