<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'cpf', 'rg', 'email', 'celular', 'data_nascimento', 'createate','sexo'];

    public static function busca($criterio)
    {
        return static::where('nome', 'LIKE', '%' . $criterio . '%')->get();
    }

    public function aluno_projetos()
    {
        return $this->hasMany(AlunoProjeto::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }
}
