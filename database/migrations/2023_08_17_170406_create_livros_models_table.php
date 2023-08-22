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
        Schema::create('livros_models', function (Blueprint $table) {
            $table->id();
            $table->string('nomeDoLivro')->nullable(false);
            $table->string('resumo')->nullable(false);
            $table->string('autor')->nullable(false);
            $table->string('codigoDoLivro')->unique()->nullable(false);
            $table->string('imagens')->nullable(true);
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros_models');
    }
};
