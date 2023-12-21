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
        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Direccion');
            $table->UnsignedBigInteger('id_fabrica');
            $table->timestamps();
           

            $table->foreign('articulo')->references('id')->on('articulos')->onDelete('cascade');
            $table->foreign('id_fabrica')->references('id')->on('local')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local');
    }
};
