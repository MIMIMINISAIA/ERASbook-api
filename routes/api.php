<?php

use App\Http\Controllers\CadastrolivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('create', [CadastrolivroController::class, 'create']);
Route::get('/find/{id}',[UsuarioController::class, 'pesquisarPorId']);
