<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'ano', 'semestre', 'status', 'supervisor_id', 'area_de_estagio', 'vagas',
        'dia_da_semana', 'hora_inicio', 'hora_fim'];

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }


    public static function busca($criterio)
    {
        return static::where('nome', 'LIKE', '%' . $criterio . '%');
    }


    public function Supervisao()
    {
        return $this->hasMany(Supervisao::class);
    }


    public function alunos_projetos()
    {
        return $this->hasMany(AlunoProjeto::class);
    }
}
