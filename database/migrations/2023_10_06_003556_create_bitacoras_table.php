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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bitacora')->nullable();
            $table->string('bitacora');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->date('fecha');
            $table->time('hora');
            $table->string('ip');
            $table->string('so');
            $table->string('navegador');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
