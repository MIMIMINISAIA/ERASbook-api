<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrolivroRequest;
use App\Models\LivrosModel;
use Illuminate\Http\Request;

class CadastrolivroController extends Controller
{
    public function create(CadastrolivroRequest $request){
        $cadastrolivro = LivrosModel::create([
            'nomeDoLivro' => $request->nomeDoLivro,
            'resumo' => $request->resumo,
            'autor'=>$request->autor,
            'codigoDoLivro'=>$request->codigoDoLivro,
            'imagens'=> $request->imagens,
        ]);

        return response()->json([
            "succes" => true,
            "message" =>"Livro Cadastrado com sucesso",
            "data" => $cadastrolivro
        ],200);
    }

    
}
