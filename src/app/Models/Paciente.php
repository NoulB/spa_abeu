<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'cpf', 'rg', 'data_nascimento', 'email', 'celular',
                           'sexo', 'pai', 'mae', 'estado_civil', 'conjuge'];
}
