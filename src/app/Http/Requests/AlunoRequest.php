<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id'=>'required|numeric',
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'rg' => 'required|numeric',
            'email' => 'required',
            'celular' => 'required|numeric',
            'data_nascimento' => 'required',
            'sexo' => 'required',
        ];
    }
}
