<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PacienteConsulta extends Model
{
    public $timestamps = false;
    protected $fillable = ['consultas_id', 'pacientes_id'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
