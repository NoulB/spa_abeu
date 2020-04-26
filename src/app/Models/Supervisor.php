<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public $timestamps = false;
    protected $table = "supervisores";
    protected $fillable = ['nome', 'id', 'crp', 'email', 'celular'];

    public static function busca($criterio)
    {
        return static::where('nome', 'LIKE', '%' . $criterio . '%')->get();
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }


}
