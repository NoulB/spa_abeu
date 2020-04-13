<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $fillable = ['matricula', 'nome', 'cpf', 'rg', 'email', 'celular', 'data_nascimento', 'sexo'];
}
