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
            $table->unsignedBigInteger('registro_id');
            $table->foreign('registro_id')->references('id')->on('registros')->onDelete('cascade');
            $table->tinyInteger('tempAmbiente')->nullable();
            $table->tinyInteger('tempCompostera')->nullable();
            $table->tinyInteger('nivelLlenado')->nullable();
            $table->enum('olor', ['Podrido', 'Amoniaco', 'Sin olor', 'Otro'])->nullable();
            $table->string('otroOlor')->nullable();
            $table->enum('insectos', ['Moscas', 'Larbas', 'Ratones', 'Otro'])->nullable();
            $table->string('otroInsecto')->nullable();
            $table->enum('humedad', ['Muy mojado', 'Seco', 'Bien', 'Otro'])->nullable();
            $table->string('otroHumedad')->nullable();
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
