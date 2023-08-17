<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrolivroRequest;
use App\Models\LivrosModel;
use Illuminate\Http\Request;

class CadastrolivroController extends Controller
{
    public function store(CadastrolivroRequest $request){
        $cadastrolivro = LivrosModel::create([
            'Nome do livro' => $request->Nomedolivro,
            'Resumo' => $request->Resumo,
            'Autor'=>$request->Autor,
            'Código do livro'=>$request->Códigodolivro,
            'imagens'=> $request->imagens,
        ]);

        return response()->json([
            "succes" => true,
            "message" =>"Livro Cadastrado com sucesso",
            "data" => $cadastrolivro
        ],200);
    }
}
