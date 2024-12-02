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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->boolean('iniCliclo');
            $table->unsignedBigInteger('antesde');
            $table->foreign('antesde')->references('id')->on('antes')->onDelete('cascade');
            $table->unsignedBigInteger('durante');
            $table->foreign('durante')->references('id')->on('durantes')->onDelete('cascade');
            $table->unsignedBigInteger('despuesde');
            $table->foreign('despuesde')->references('id')->on('despues')->onDelete('cascade');
            $table->unsignedBigInteger('compostera');
            $table->foreign('compostera')->references('id')->on('composteras')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
