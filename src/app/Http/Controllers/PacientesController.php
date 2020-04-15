<?php


namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;


class PacientesController extends Controller
{

    private $paciente;
    public function __construct()
    {
        $this->paciente = new Paciente();
    }
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


    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('pacientes.show', compact('paciente'));
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

    public function edit($id)
    {
        return view('pacientes.editar', [
            'paciente' => $this->getPaciente($id)
        ]);

    }

    public function update(Request $request)
    {
        $paciente = $this->getPaciente($request->id);
        $paciente->update($request->all());
        return redirect('/pacientes');

    }
    protected function getPaciente($id) {
        return $this->paciente->find($id);
    }

}
