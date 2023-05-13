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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable(false);
            $table->string('ap_pat')->nullable(false);
            $table->string('ap_mat')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('telefono')->nullable(false);
            $table->string('username')->nullable(false);
            $table->string('password')->nullable(false);
            $table->integer('status')->nullable(false);
            $table->unsignedBigInteger('id_tipo_usuario');
            $table->unsignedBigInteger('id_pais');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_entidad');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipos_usuarios');
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
        Schema::dropIfExists('usuarios');
    }
};
