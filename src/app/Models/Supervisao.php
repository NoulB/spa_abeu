<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Supervisao extends Model
{
    public $timestamps = false;
    protected $table = "supervisoes";

    public function agenda_supervisao()
    {
        return $this->belongsTo(Projeto::class);
    }
}

