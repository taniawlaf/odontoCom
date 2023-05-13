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
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable(false);
            $table->float('costo',6,2)->nullable(false);
            $table->string('descripcion')->nullable(false);
            $table->unsignedBigInteger('id_tipo_tratamiento');
            $table->foreign('id_tipo_tratamiento')->references('id')->on('tipos_tratamientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamientos');
    }
};
