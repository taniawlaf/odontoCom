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
        Schema::create('consultorios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->nullable(false);
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_clinica');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_clinica')->references('id')->on('clinicas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultorios');
    }
};
