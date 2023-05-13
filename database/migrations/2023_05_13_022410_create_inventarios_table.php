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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
                $table->integer('existencia')->nullable(false);
                $table->integer('entrada')->nullable(false);
                $table->integer('salida')->nullable(false);
                $table->integer('stock')->nullable(false);
                //$table->integer('id_material')->unsigned();
                $table->unsignedBigInteger('id_material');
                $table->foreign('id_material')->references('id')->on('materiales');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
