<?php


namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;


class PacientesController extends Controller
{
    public function index(Request $request)
    {

        $pacientes = Paciente::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('pacientes.index', compact('pacientes', 'mensagem'));

    }


    public function create()
    {
        return view('pacientes.create');
    }


    public function store(PacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Paciente {$paciente->nome} cadastrada com sucesso"
            );

        return redirect('pacientes');
    }

}
