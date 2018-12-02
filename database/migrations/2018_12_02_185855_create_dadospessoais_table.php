<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadospessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadospessoais', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_user_id');
            $table->string('nome_completo');
            $table->char('sexo',1);
            $table->date('data_nascimento');
            $table->string('cpf',11);
            $table->timestamps();
            $table->foreign('fk_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dadospessoais');
    }
}
