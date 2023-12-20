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
      Schema::create('traspaso', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('local_origen');
            $table->UnsignedBigInteger('local_destino');
            $table->UnsignedBigInteger('articulo');
            $table->UnsignedBigInteger('cantidad');
            $table->timestamps();

            $table->foreign('articulo')->references('id')->on('articulo')->onDelete('cascade');
            $table->foreign('local_origen')->references('id')->on('local')->onDelete('cascade');
            $table->foreign('local_destino')->references('id')->on('local')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traspaso');
    }
};
