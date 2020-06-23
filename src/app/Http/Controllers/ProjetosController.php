<?php


namespace App\Http\Controllers;


use App\Http\Requests\ProjetoRequest;
use App\Models\Projeto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjetosController extends Controller
{
    private $projeto;

    public function __construct()
    {
        $this->projeto = new Projeto();
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $ldate = date('Y-m-d H:i:s');

        $projetos = DB::table('projetos')
            ->join('supervisores', 'supervisores.id', '=', 'projetos.supervisor_id')
//            ->join('supervisoes', 'supervisoes.projetos_id', '=', 'projetos.id')
            ->select('projetos.dia_da_semana as dia', 'projetos.nome as projeto', 'supervisores.nome as supervisor',
                'projetos.area_de_estagio', 'projetos.hora_inicio as inicio', 'projetos.hora_fim as fim', 'projetos.vagas')
            ->where('projetos.status', '=', 1)
            ->orderByRaw( "FIELD(dia_da_semana,'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado')")


            ->orderBy('area_de_estagio')
            ->orderBy('hora_inicio')
            ->get();


        $mensagem = $request->session()->get('mensagem');

        return view('projetos.index', compact('projetos', 'mensagem'));

    }


    public function create()
    {
        $ano = Carbon::now();
        return view('projetos.create', compact('ano'));
    }


    public function store(ProjetoRequest $request)
    {
        $projeto = Projeto::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Projeto {$projeto->nome} cadastrado com sucesso"
            );

        return redirect('projetos');
    }


    public function busca(Request $request)
    {
        $projetos = Projeto::busca($request->criterio)->get();

        return view('projetos.index', [
            'projetos' => $projetos,
            'criterio' => $request->criterio
        ]);
    }
}
