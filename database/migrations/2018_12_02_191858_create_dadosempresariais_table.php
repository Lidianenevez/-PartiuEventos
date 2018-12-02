<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosempresariaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadosempresariais', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fk_user_id');
            $table->string('nome_fantasia');
            $table->date('data_abertura');
            $table->string('cnpj',14);
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
        Schema::dropIfExists('dadosempresariais');
    }
}
