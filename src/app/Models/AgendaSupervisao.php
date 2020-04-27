<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AgendaSupervisao extends Model
{
    public $timestamps = false;
    protected $table = "agenda_supervisoes";
    protected $fillable = ['id', 'projeto_id', 'dia_da_semana', 'hora'];


    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function supervisoes()
    {
        return $this->hasMany(Supervisao::class);
    }
}
