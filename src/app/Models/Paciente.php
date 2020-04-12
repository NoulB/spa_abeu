<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'cpf', 'rg', 'data_nascimento', 'sexo', 'email', 'celular', 'telefone',
                            'pai', 'mae', 'estado_civil', 'conjuge', 'logradouro', 'numero', 'complemento',
                            'bairro', 'cidade', 'cep'];
}
