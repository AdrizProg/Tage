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
        Schema::create('resgistros_tendran_bolos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->unsignedBigInteger('id_registro');
            $table->unsignedBigInteger('id_bolo');
            $table->foreign('id_registro')->references('id')->on('registros')->onDelete('cascade');
            $table->foreign('id_bolo')->references('id')->on('bolos')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resgistros_tendran_bolos');
    }
};
