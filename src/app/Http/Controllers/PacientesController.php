<?php


namespace App\Http\Controllers;


use App\Models\Pessoa;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index(Request $request)
    {
        $pacientes = Paciente::all();


        return view('pacientes.index', compact('pacientes'));
    }


    public function create()
    {
        return view('pacientes.create');
    }


    public function store(Request $request)
    {

        $paciente = Paciente::create($request->all());
        $request->session()
            ->flash(
            'mensagem',
            "Paciente {$paciente->nome} cadastrada com sucesso"
            );
        return redirect()->route('listar_pacientes');
    }

}
