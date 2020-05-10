<?php


namespace App\Http\Controllers;


use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    public function index(Request $request)
    {

        $consultas = DB::table('consultas')
            -> join('alunos', 'consultas.alunos_id', '=', 'alunos.id' )
            -> join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            -> join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            -> join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            -> select('consultas.id', 'pacientes.nome as paciente' , 'alunos.nome as aluno', 'consultas.consultorio', 'consultas.dia', 'consultas.hora')
            -> where('dia', '=', date("Y-m-d"))
            ->orderBy('consultas.hora')
            -> get();

        $mensagem = $request->session()->get('mensagem');

        return view('consultas.index', compact('consultas', 'mensagem'));

    }


    public function create()
    {
        return view('consultas.create');
    }

    public function busca_paciente(Request $request)
    {
        $pacientes = Paciente::busca($request->criterio);

        return $pacientes;
    }

    public function pesquisarp(Request $request)
    {
        $dados = [];
        $dados['url'] = url('/');
        $dados['pacientes'] = Pacientes::where('nome','like','%'.$request->input('pesquisarp').'%')->get();
        return response()->json($dados);
    }



}
