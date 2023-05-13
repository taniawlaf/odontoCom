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
        Schema::create('materiales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable(false);
            $table->string('descripcion')->nullable(false);
            $table->integer('status')->nullable(false);
            //esta linea es para crear campos de created y updated
            $table->timestamps();
        });
        /*
        if( !Schema::hasTable('tipos_usuarios') ) {
            Schema::create('tipos_usuarios', function( Blueprint $table ) {
                $table->id('id');
                $table->string('nombre')->nullable();
                $table->integer('nivel')->nullable();
                $table->integer('status')->nullable();
                $table->timestamps();
            });
        }

        if( !Schema::hasTable('tipos_tratamientos') ) {
            Schema::create('tipos_tratamientos', function( Blueprint $table ) {
                $table->id('id');
                $table->string('nombre')->nullable();
                $table->integer('semestre')->nullable();
                $table->integer('status')->nullable();
                $table->timestamps();
            });
        }*/

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiales');
        
        //Schema::dropIfExists('tipos_usuarios');
        //Schema::dropIfExists('tipos_tratamientos');

    }
};