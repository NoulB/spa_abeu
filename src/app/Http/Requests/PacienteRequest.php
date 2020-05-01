<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'rg' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'mae' => 'required',
            'estado_civil' => 'required',
            'logradouro' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' =>'required',
            'createate',
        ];
    }
}
