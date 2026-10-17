<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // parte simples da criação da tabela carro, com id, modelo, marca, ano e timestamps no banco de dados
    public function up(): void
    {
        Schema::create('carro', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('marca');
            $table->integer('ano');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carro');
    }
};
