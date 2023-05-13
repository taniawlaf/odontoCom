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
        Schema::create('archivos_tratamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->nullable(false);
            $table->string('ruta')->nullable(false);
            $table->unsignedBigInteger('id_tratamiento');
            $table->foreign('id_tratamiento')->references('id')->on('tratamientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivos_tratamientos');
    }
};
