<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id('codigo_endereco');
            $table->string('nome_rua');
            $table->integer('numero');
            $table->string('complemento');
            $table->integer('cep');
            $table->unsignedBigInteger('codigo_pessoa');
            $table->unsignedBigInteger('codigo_bairro');
            $table->timestamps();

            $table->foreign('codigo_pessoa')->references('codigo_pessoa')->on('pessoas');
            $table->foreign('codigo_bairro')->references('codigo_bairro')->on('bairros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
};
