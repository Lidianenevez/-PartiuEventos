<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagem');
            $table->string('nome_evento');
            $table->text('descricao');
            $table->float('preco', 8, 2)->nullable();
            $table->timestamps();
            $table->unsignedInteger('cidade');
            $table->unsignedInteger('fk_user_id');
            $table->unsignedInteger('fk_datetime_id');
            $table->unsignedInteger('fk_categoria_id');
            $table->foreign('cidade')->references('id')->on('cidades');
            $table->foreign('fk_user_id')->references('id')->on('users');
            $table->foreign('fk_categoria_id')->references('id')->on('categoria');
            $table->foreign('fk_datetime_id')->references('id')->on('datetime_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
