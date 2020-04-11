<?php


namespace App\Http\Controllers;


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
        $validacao = $request->validate([
            'nome' => 'required',
            'cpf' => 'required|numeric',
            'rg' => 'required|numeric',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'mae' => 'required',
            'estado_civil' => 'required',
            'logradouro' => 'required',
            'numero' => 'required|numeric',
            'bairro' => 'required',
            'cidade' => 'required',
            'cep' =>'required|numeric',
        ]);

        $paciente = Paciente::create($request->all());
        $request->session()
            ->flash(
            'mensagem',
            "Paciente {$paciente->nome} cadastrada com sucesso"
            );
        return redirect()->route('listar_pacientes');
    }

}
