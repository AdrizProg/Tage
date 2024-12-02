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
        Schema::create('despues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_registros');
            $table->foreign('id_registros')->references('id')->on('registros')->onDelete('cascade');
            $table->tinyInteger('nivelLLenado')->nullable();
            $table->string('fotoFinal')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despues');
    }
};
