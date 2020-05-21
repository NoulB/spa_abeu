<?php


namespace App\Http\Controllers;


use App\Models\Aluno;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\PacienteConsulta;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ConsultasController extends Controller

{
    public function index(Request $request)
    {

        $consultas = DB::table('consultas')

            -> join('alunos', 'consultas.alunos_id', '=', 'alunos.id' )
            -> join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            -> join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            -> join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            -> select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor', 'consultas.consultorio', 'consultas.dia', 'consultas.hora')
             -> where("dia", "=", Carbon::now(-3)->toDateString())
            ->orderBy('consultas.hora')
            ->groupBy('consultas.id')
            -> get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);

        $mensagem = $request->session()->get('mensagem');
        return view('consultas.index', compact('consultas', 'mensagem'));

    }

    public function show($id)
    {
        $consulta = Consulta::find($id);

        return view('consultas.show', compact('consulta'));
    }


    public function retornop($busca)
    {

        $pacientes = Paciente::query()
            -> where('nome', 'like', $busca.'%')
            ->orderBy('nome')
            ->limit(5)
            ->get();


        return response()->json($pacientes);
//        return view('consultas.buscas.retornop', compact('pacientes'));

    }
    public function retornoa($busca)
    {

        $alunos = Aluno::query()
            -> where('nome', 'like', $busca.'%')
            ->orderBy('nome')
            ->limit(5)
            ->get();

        return response()->json($alunos);
//        return view('consultas.buscas.retornoa', compact('alunos'));

    }

    public function retornos($busca)
    {

        $supervisores = Supervisor::query()
            -> where('nome', 'like', $busca.'%')
            ->orderBy('nome')
            ->limit(5)
            ->get();


        return response()->json($supervisores);
//        return view('consultas.buscas.retornos', compact('supervisores'));

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

    public function store(Request $request)
    {
        $consulta = new Consulta;
        $consulta->alunos_id = $request->get('idaluno');
        $consulta->supervisores_id = $request->get('idsupervisor');
        $consulta->dia = $request->get('dia');
        $consulta->hora = $request->get('hora');
        $consulta->consultorio = $request->get('consultorio');
        $consulta->save();


        $consid = $consulta->id;
        $pacid = json_decode($request->get('idpaciente'));

        for ($i = 0; $i < count($pacid); $i++) {
            $pacienteconsulta = new PacienteConsulta();
            $pacienteconsulta->pacientes_id = $pacid[$i];
            $pacienteconsulta->consultas_id = $consid;
            $pacienteconsulta->save();
        }
        $request->session();
        return redirect('consultas');
    }



}
