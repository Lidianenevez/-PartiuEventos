<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatetimeEventosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datetime_eventos', function (Blueprint $table) {
			$table->increments('id');
			$table->date('data_inicio');
			$table->date('data_final')->nullable();
			$table->time('hora_inicio');
			$table->time('hora_final')->nullable();
			$table->integer('carga_horaria')->nullable();
			$table->unsignedInteger('fk_evento_id');
			$table->foreign('fk_evento_id')->references('id')->on('evento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('datetime_eventos');
	}
}
