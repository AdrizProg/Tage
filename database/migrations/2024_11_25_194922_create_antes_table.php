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
        Schema::create('antes', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('tempAmbiente')->nullable();
            $table->tinyInteger('tempCompostera')->nullable();
            $table->tinyInteger('nivelLLenado')->nullable();
            $table->enum('olor', ['Podrido','Amoniaco','Sin olor','Otro'])->nullable();
            $table->string('insectos')->nullable();
            $table->enum('humedad', ['Muy mojado','Seco','Bien','Otro'])->nullable();
            $table->string('foto')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antes');
    }
};
