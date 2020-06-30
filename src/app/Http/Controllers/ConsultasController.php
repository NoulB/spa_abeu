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
            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
                'consultas.consultorio', 'consultas.dia', 'consultas.hora', 'pacientes.nome as paciente', 'consultas.id as consulta')
            ->where("dia", "=", Carbon::now(-3)->toDateString())
//            ->where('consultas.status', '=', 'não realizada')
            ->orderBy('consultas.hora')
//            ->groupBy('consultas.id')
            ->get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);

        $mensagem = $request->session()->get('mensagem');
//        var_dump($consultas);
        return view('consultas.index', compact('consultas',  'mensagem'));

    }

    public function show($id)
    {
        $consulta = Consulta::find($id);
        $aluno = Aluno::where('id', $consulta->alunos_id)->first()->nome;
        $supervisor = Supervisor::where('id', $consulta->supervisores_id)->first()->nome;
        $pacid = PacienteConsulta::where('consultas_id', $consulta->id)->pluck('pacientes_id')->toArray();
        $pac = Paciente::query()
            ->whereIn('id', $pacid)
//            ->pluck('nome')
//            ->toArray();
            ->get();

        return view('consultas.show', compact('consulta', 'aluno', 'supervisor', 'pacid', 'pac'));
    }


    public function retornop($busca)
    {

        $pacientes = Paciente::query()
            ->where('nome', 'like', $busca . '%')
            ->orderBy('nome')
            ->limit(5)
            ->get();


        return response()->json($pacientes);
//        return view('consultas.buscas.retornop', compact('pacientes'));

    }

    public function retornoa($busca)
    {
        $alunos = Aluno::query()
            ->where('nome', 'like', $busca . '%')
            ->orderBy('nome')
            ->limit(5)
            ->get();

        return response()->json($alunos);
//        return view('consultas.buscas.retornoa', compact('alunos'));
    }


    public function retornos($busca)
    {
        $supervisores = Supervisor::query()
            ->where('nome', 'like', $busca . '%')
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
        return redirect('/');
    }


    public function destroy(Request $request)
    {
        $consulta = Consulta::find($request->id);
        DB::table('consultas')
            ->where('id', $consulta->id)
            ->update(['status' => 'cancelada']);
        $request->session()
            ->flash(
                'mensagem',
                "Consulta cancelada com sucesso!"
            );
        return redirect('consultas');
    }


    public function confirmaConsulta(Request $request)
    {
        $consulta = Consulta::find($request->id);
        DB::table('consultas')
            ->where('id', $consulta->id)
            ->update(['status' => 'realizada']);
        $request->session()
            ->flash(
                'mensagem',
                "Consulta relizada!"
            );
        return redirect('consultas');
    }


//    public function buscaConsultaPorPaciente(Request $request)
//    {
//        $paciente_id = PacienteConsulta::where('consultas_id', $consulta->id)->pluck('pacientes_id')
//
//        $consultas = DB::table('consultas')
//            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
//            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
//            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
//            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
//            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
//                'consultas.consultorio', 'consultas.dia', 'consultas.hora')
//            ->whereIn()
//            ->orderBy('consultas.hora')
//            ->groupBy('consultas.id')
//            ->get();
////            ->simplePaginate(10);
////        $consultas = Consulta::query()
////            ->orderBy('dia')
////            ->simplePaginate(10);
//
//        $mensagem = $request->session()->get('mensagem');
//        return view('consultas.index', compact('consultas', 'mensagem'));
//
//    }
}
