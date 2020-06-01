<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoRequest extends FormRequest
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
            'nome'=>'required',
            'ano'=>'required|numeric',
            'semestre'=>'required',
            'supervisor_id'=>'numeric',
            'status',
            'area_de_estagio'=>'required',
            'vagas'=>'numeric',
            'dia_da_semana'=>'required',
            'hora_inicio'=>'required',
            'hora_fim'=>'required',
        ];
    }
}
