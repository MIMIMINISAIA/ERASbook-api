<?php

namespace App\Http\Requests;

use Dotenv\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CadastrolivroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nomedolivro' => 'required',
            'Resumo' => 'required',
            'Autor'=> 'required',
            'Código do livro'=>'required|unique:usuarios,Código do livro',
            'imagens'=>'required'
        ];
        
    }
     
    public function failedValidation (ValidationValidator $validator){
        throw new HttpResponseException(response()->json([
            'sucess' => false,
            'error' => $validator->errors()
        ]));
    }

    public Function messages(){
        return [
            'nomedolivro.required'=> 'O campo nome do livro é obrigatorio',
            'resumo.required' =>'Resumo obrigatorio',
            'Autor.required' => 'autor obrigatorio',
            'codigodolivro.unique' => 'formato de codigo invalido',
            'imagens.required' => 'imagem obrigatoria',
    
        ];
    }
}
