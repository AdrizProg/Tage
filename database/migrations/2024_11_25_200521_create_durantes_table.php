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
        Schema::create('durantes', function (Blueprint $table) {
            $table->id();
            $table->enum('riego', ['Si','No'])->nullable();
            $table->enum('revolver', ['Si','No'])->nullable();
            $table->tinyInteger('aporteVerde')->nullable();
            $table->string('tipoAporteVerde')->nullable();
            $table->tinyInteger('aporteSeco')->nullable();
            $table->string('tipoAporteSeco')->nullable();
            $table->string('fotoDurante')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('durantes');
    }
};
