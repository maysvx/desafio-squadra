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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id('codigo_municipio');
            $table->string('nome');
            $table->integer('status');
            $table->unsignedBigInteger('codigo_uf');
            $table->timestamps();

            $table->foreign('codigo_uf')->references('codigo_uf')->on('ufs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
};
