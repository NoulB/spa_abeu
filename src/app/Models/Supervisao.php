<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Supervisao extends Model
{
    public $timestamps = false;
    protected $table = "supervisoes";

    public function Projeto()
    {
        return $this->belongsTo(Projeto::class);
    }
}

