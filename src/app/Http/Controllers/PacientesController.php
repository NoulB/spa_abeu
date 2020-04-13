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


    public function busca(Request $request)
    {
        $pacientes = Paciente::busca($request->criterio);

        return view('pacientes.index', [
            'pacientes' => $pacientes,
            'criterio' => $request->criterio
        ]);

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


    public function update(PacienteRequest $request, $id)
    {
//        $paciente = $this->paciente->find($id);
//
//        return view("pacientes.create", compact('paciente'));
    }
}
