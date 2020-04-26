<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'ano', 'semestre', 'status', 'supervisor_id'];

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function agenda_supervisoes()
    {
        return $this->hasMany(AgendaSupervisao::class);
    }

    public function alunos_projetos()
    {
        return $this->hasMany(AlunoProjeto::class);
    }
}
