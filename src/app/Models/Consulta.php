<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'alunos_id', 'supervisores_id', 'dia', 'hora', 'consultorio', 'status'];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function pacientes_consulta()
    {
        return $this->hasMany(PacienteConsulta::class);
    }
}
