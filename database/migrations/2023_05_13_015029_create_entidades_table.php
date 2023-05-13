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
        Schema::create('entidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clave_pais');
            $table->string('nombre')->nullable(false);
            $table->integer('status')->nullable(false);
            $table->unsignedBigInteger('id_pais');
            $table->foreign('id_pais')->references('id')->on('paises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidades');
    }
};
