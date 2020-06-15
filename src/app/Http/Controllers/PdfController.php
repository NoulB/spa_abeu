<?php


namespace App\Http\Controllers;


use App\Models\Projeto;
use App\Models\Aluno;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use carbon\carbon;
use PDF;

class PdfController extends Controller
{
    private $pdf;

    public function __construct()
    {
        $this->pdf = new pdf();
        $this->middleware('auth');
    }

    public function gerarPDFTDPacientesCadastrados()
    {
        $paciente = DB::table('pacientes')
            ->select('pacientes.id', 'pacientes.nome as nome', 'pacientes.cpf', 'pacientes.rg', 'pacientes.data_nascimento', 'pacientes.sexo', 'pacientes.email',
            'pacientes.celular', 'pacientes.telefone','pacientes.pai', 'pacientes.mae', 'pacientes.estado_civil', 'pacientes.status')
            ->where('status', '=', '1')
            ->orderBy('nome')
            ->simplePaginate(10);
        $paciente2 = Carbon::now();

//        $paciente4 = DB::table('pacientes')
//            ->select('pacientes.nome as nome')
//        ->get();
//        $arr = explode(' ', $paciente4);
//        $names = collect($arr)->slice(0, 2)->implode(' ');
        $pdf = PDF::loadView('PDFTDPacientesCadastrados', compact('paciente',  'paciente2'));//,'names'));
        return $pdf->setPaper('a4')->stream('Todos_os_Pacientes_Cadastrados.pdf');

    }
    public function gerarPDFTDPacientesDeletados()
    {

        $paciente1 = Paciente::query()
            ->where('status', '=', '0')
            ->orderBy('nome')
            ->simplePaginate(10);
        $paciente2 = Carbon::now();
//        $paciente4 = DB::table('pacientes')
//            ->select('pacientes.nome as nome')
//            ->get();
//        $arr = explode(' ', $paciente4);
//        $names = collect($arr)->slice(0, 2)->implode(' ');
        $pdf = PDF::loadView('PDFTDPacientesDeletados', compact( 'paciente1', 'paciente2'));//,'names'));
        return $pdf->setPaper('a4')->stream('Todos_os_Pacientes_Deletados.pdf');

    }
    public function gerarPdfTDSupervisoresCadastrados()
    {
        $supervisores3 = Supervisor::query()
            ->where('status', '!=', 4)
            ->orderBy('nome')
            ->simplePaginate(10);
        $supervisores2 = Carbon::now();
        $pdf = PDF::loadView('PDFTDSupervisoresCadastrados', compact('supervisores3',  'supervisores2'));
        return $pdf->setPaper('a4')->stream('Todos_os_Supervisores_Cadastrados.pdf');
    }
    public function gerarPdfTDSupervisoresDeletados()
    {
        $supervisores1 = Supervisor::query()
            ->where('status', '=', 4)
            ->orderBy('nome')
            ->simplePaginate(10);
        $supervisores2 = Carbon::now();
        $pdf = PDF::loadView('PDFTDSupervisoresDeletados', compact( 'supervisores1', 'supervisores2'));
        return $pdf->setPaper('a4')->stream('Todos_os_Supervisores_Deletados.pdf');
    }
    public function gerarPDFTDAlunosCadastrados()
    {
        $aluno = Aluno::query()
            ->where('status', '=', 1)
            ->orderBy('nome')
            ->simplePaginate(10);

        $aluno2 = Carbon::now();
        $pdf = PDF::loadView('PDFTDAlunosCadastrados', compact('aluno',  'aluno2'));
        return $pdf->setPaper('a4')->stream('Todos_os_Alunos_Cadastrados.pdf');
    }
    public function gerarPDFTDAlunosDeletados()
    {
        $aluno1 = Aluno::query()
            ->where('status', '=', 0)
            ->orderBy('nome')
            ->simplePaginate(10);
        $aluno2 = Carbon::now();
        $pdf = PDF::loadView('PDFTDAlunosDeletados', compact( 'aluno1', 'aluno2'));
        return $pdf->setPaper('a4')->stream('Todos_os_Alunos_Deletados.pdf');
    }
    public function gerarPDFTDTDConsultas()
    {

        $consultas = Consulta::all()
            ->where('status', '!=', 'não realizada');


        $consultas1 = Consulta::all()
            ->where('status', '=', 'não realizada');
        $consultas2 = Carbon::now();
        $pdf = PDF::loadView('PDFTDTDConsulta', compact('consultas', 'consultas1', 'consultas2'));
        return $pdf->setPaper('a4')->stream('Todos_os_Alunos.pdf');
    }
    public function consultasteste(Request $request)
    {
        $consultas1 = DB::table('consultas')
            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
                'consultas.consultorio', 'consultas.dia', 'consultas.hora', 'pacientes.nome as paciente', 'consultas.id as consulta','consultas.status as status')
//            ->where("dia", "=", Carbon::now(-3)->toDateString())
            ->where('consultas.status', '=', 'não realizada')
            ->orderBy('consultas.hora')
//            ->groupBy('consultas.id')
            ->get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);

        $consultas2 = Carbon::now();
        $consultas3 = DB::table('consultas')
            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
                'consultas.consultorio', 'consultas.dia', 'consultas.hora', 'pacientes.nome as paciente', 'consultas.id as consulta','consultas.status as status')
//            ->where("dia", "=", Carbon::now(-3)->toDateString())
            ->where('consultas.status', '=', 'cancelada')
            ->orderBy('consultas.dia')
            ->orderBy('consultas.hora')

            //            ->groupBy('consultas.id')
            ->get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);
        $consultas4 = DB::table('consultas')
            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
                'consultas.consultorio', 'consultas.dia', 'consultas.hora', 'pacientes.nome as paciente', 'consultas.id as consulta','consultas.status as status')
//            ->where("dia", "=", Carbon::now(-3)->toDateString())
            ->where('consultas.status', '!=', 'não realizada')
            ->orderBy('consultas.dia')
            ->orderBy('consultas.hora')
//            ->groupBy('consultas.id')
            ->get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);
        $consultas5 = DB::table('consultas')
            ->join('alunos', 'consultas.alunos_id', '=', 'alunos.id')
            ->join('supervisores', 'consultas.supervisores_id', '=', 'supervisores.id')
            ->join('pacientes_consultas', 'consultas.id', '=', 'pacientes_consultas.consultas_id')
            ->join('pacientes', 'pacientes.id', '=', 'pacientes_consultas.pacientes_id')
            ->select('consultas.id', 'alunos.nome as aluno', 'supervisores.nome as supervisor',
                'consultas.consultorio', 'consultas.dia', 'consultas.hora', 'pacientes.nome as paciente', 'consultas.id as consulta','consultas.status as status')
//            ->where("dia", "=", Carbon::now(-3)->toDateString())
            ->where('consultas.status', '=', 'realizada')
            ->orderBy('consultas.hora')
//            ->groupBy('consultas.id')
            ->get();
//            ->simplePaginate(10);
//        $consultas = Consulta::query()
//            ->orderBy('dia')
//            ->simplePaginate(10);
        $mensagem = $request->session()->get('mensagem');
        $pdf = PDF::loadView('PDFTDTDConsultas', compact('consultas1','consultas2','consultas3','consultas4','consultas5', 'mensagem'));
        return $pdf->setPaper('a4')->stream('Todas_as_Consultas.pdf');}


    public function Projetos(Request $request)
    {
        $projetos = DB::table('projetos')
            ->join('supervisores', 'supervisores.id', '=', 'projetos.supervisor_id')
//            ->join('supervisoes', 'supervisoes.projetos_id', '=', 'projetos.id')
            ->select('projetos.dia_da_semana as dia', 'projetos.nome as projeto','projetos.semestre as semestre','projetos.area_de_estagio as area', 'projetos.ano as ano', 'supervisores.nome as supervisor',
                'projetos.area_de_estagio', 'projetos.hora_inicio as inicio', 'projetos.hora_fim as fim', 'projetos.vagas')
            ->where('projetos.status', '=', 1)
            ->orderBy('projetos.dia_da_semana')
            ->orderBy('area_de_estagio')
            ->orderBy('hora_inicio')
            ->get();
        $projetos2 = Carbon::now();


        $mensagem = $request->session()->get('mensagem');
        $pdf = PDF::loadView('PDFTDProjetos', compact('projetos', 'projetos2','mensagem'));
        return $pdf->setPaper('a4')->stream('Todas_as_Consultas.pdf');

    }
//        var_dump($consultas);
//    public function gerarPDFTDPacientesDownload()
//    {
//        $paciente = Paciente::query()
//            ->where('status', '!=', '4')
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $paciente1 = Paciente::query()
//            ->where('status', '=', '4')
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $paciente2 = Carbon::now();
//        $pdf = PDF::loadView('PDFTDPacientes', compact('paciente', 'paciente1', 'paciente2'));
//        return $pdf->setPaper('a4')->download('Todos_os_Pacientes.pdf');
//
//    }
//
//    public function gerarPdfTDSupervisoresDownload()
//    {
//        $supervisores = Supervisor::query()
//            ->where('status', '!=', 4)
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $supervisores1 = Supervisor::query()
//            ->where('status', '=', 4)
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $supervisores2 = Carbon::now();
//        $pdf = PDF::loadView('PDFTDSupervisores', compact('supervisores', 'supervisores1', 'supervisores2'));
//        return $pdf->setPaper('a4')->download('Todos_os_Supervisores.pdf');
//    }
//
//    public function gerarPDFTDAlunosDownload()
//    {
//        $aluno = Aluno::query()
//            ->where('status', '!=', 4)
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $aluno1 = Aluno::query()
//            ->where('status', '=', 4)
//            ->orderBy('nome')
//            ->simplePaginate(10);
//        $aluno2 = Carbon::now();
//        $pdf = PDF::loadView('PDFTDAlunos', compact('aluno', 'aluno1', 'aluno2'));
//        return $pdf->setPaper('a4')->download('Todos_os_Alunos.pdf');
//    }
//    public function gerarPDFTDTDConsultasDownload()
//    {
//
//        $consultas = Consulta::all()
//            ->where('status', '!=', 'não realizada');
//
//
//        $consultas1 = Consulta::all()
//            ->where('status', '=', 'não realizada');
//        $consultas2 = Carbon::now();
//        $pdf = PDF::loadView('PDFTDTDConsulta', compact('consultas', 'consultas1', 'consultas2'));
//        return $pdf->setPaper('a4')->download('Todos_os_Alunos.pdf');
//    }

}
