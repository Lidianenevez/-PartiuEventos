<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_evento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_user_id');
            $table->unsignedInteger('fk_evento_id');
            $table->string('feedback')->nullable();
            $table->float('nota', 4, 2);
            $table->timestamps();
            $table->foreign('fk_user_id')->references('id')->on('users');
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
        Schema::dropIfExists('avaliacao_evento');
    }
}
