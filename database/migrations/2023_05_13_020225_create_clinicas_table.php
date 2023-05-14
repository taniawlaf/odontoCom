<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clinicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institucion')->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->integer('numero')->nullable(false);
            $table->unsignedBigInteger('id_pais');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_entidad');
            $table->foreign('id_pais')->references('id')->on('paises');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_entidad')->references('id')->on('entidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinicas');
    }
};
