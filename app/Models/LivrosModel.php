<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivrosModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeDoLivro',
        'resumo',
        'autor',
        'codigoDoLivro',
        'imagens'
    ];
}
