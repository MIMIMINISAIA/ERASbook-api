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
            $table->string('Nome do livro')->nullable(false);
            $table->string('Resumo')->nullable(false);
            $table->string('cAutor')->nullable(false);
            $table->string('Código do livro')->unique()->nullable(false);
            $table->string('imagens')->nullable(false);
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
