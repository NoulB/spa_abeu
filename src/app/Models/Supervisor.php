<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    public $timestamps = false;
    protected $table = 'supervisores';
    protected $fillable = ['nome', 'matricula', 'crp', 'email', 'celular'];
}
