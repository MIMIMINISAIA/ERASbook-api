<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivrosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome do livro',
        'Resumo',
        'Autor',
        'Código do livro',
        'imagens'
    ];
}
