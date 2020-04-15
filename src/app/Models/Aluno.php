<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'cpf', 'rg', 'email', 'celular', 'data_nascimento', 'sexo'];

    public static function busca($criterio)
    {
        return static::where('nome', 'LIKE', '%' . $criterio . '%')->get();
    }
}
