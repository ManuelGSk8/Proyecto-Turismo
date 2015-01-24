<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoracionComentariosAgencia extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('ValoracionComenAgencia', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('agencia_id')->unsigned();
            $table->foreign('agencia_id')->references('id')->on('agenciaturisticas');
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
	  	Schema::drop('ValoracionComenAgencia');
	}

}
