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
        Schema::create('modelo_veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo', 100)->nullable(false);
            $table->date('data')->nullable(false);
            $table->string('placa', 15)->nullable(false)->unique();
            $table->foreign('id_acessibilidade')->references('id')->on('acessibilidades')->onDelete('cascade')->onUpdate('cascade')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelo_veiculos');
    }
};
