<?php


namespace App\Http\Controllers;


use App\Models\Projeto;
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

        $projetos = DB::table('projetos')
            ->join('supervisores', 'supervisores.id', '=', 'projetos.supervisor_id')
//            ->join('supervisoes', 'supervisoes.projetos_id', '=', 'projetos.id')
            ->select('projetos.dia_da_semana as dia', 'projetos.nome as projeto', 'supervisores.nome as supervisor',
                'projetos.area_de_estagio', 'projetos.hora_inicio as inicio', 'projetos.hora_fim as fim', 'projetos.vagas')
            ->where('projetos.status', '=', 1)
            ->orderBy('projetos.dia_da_semana')
            ->orderBy('area_de_estagio')
            ->orderBy('hora_inicio')
            ->get();

//        var_dump($projetos);
//        exit();
        $mensagem = $request->session()->get('mensagem');

        return view('projetos.index', compact('projetos', 'mensagem'));

    }


    public function create()
    {
        return view('projetos.create');
    }
}
