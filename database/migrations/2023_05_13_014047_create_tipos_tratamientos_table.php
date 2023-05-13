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
        Schema::create('tipos_tratamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable(false);
            $table->integer('semestre')->nullable(false);
            $table->integer('status')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_tratamientos');
    }
};
