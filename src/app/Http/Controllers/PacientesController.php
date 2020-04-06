<?php


namespace App\Http\Controllers;


use App\Providers\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(Request $request)
    {
//        $pacientes = Pacientes::query()
//            ->orderBy('nome')
//            ->get();
//        $mensagem = $request->session()->get('mensagem');


        return view('pacientes.index');
    }

    public function create()
    {
        return view('pacientes.create');
    }
}
