<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AlunoProjeto extends Model
{
    public $timestamps = false;
    protected $table = "alunos_projetos";

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}
