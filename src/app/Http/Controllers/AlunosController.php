<?php


namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;


class AlunosController extends Controller
{


    private $aluno;
    public function __construct()
    {
        $this->aluno = new Aluno();
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $alunos = Aluno::query()->where('status','=', 'aguardando')
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('alunos.index', compact('alunos', 'mensagem'));

    }
    public function create()
    {
        return view('alunos.create');
    }

    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Aluno(a) {$aluno->nome} cadastrado com sucesso!"
            );
        return redirect()->route('listar_alunos');
    }

    public function busca(Request $request)
    {
        $alunos = Aluno::busca($request->criterio);

        return view('alunos.index', [
            'alunos' => $alunos,
            'criterio' => $request->criterio
        ]);

    }


    public function show($id)
    {
        $aluno = Aluno::find($id);

//        var_dump($aluno);
//    exit();
        return view('alunos.show', compact('aluno'));
    }

    public function edit($id)
    {
        return view('alunos.editar', [
            'aluno' => $this->getAluno($id)
        ]);

    }

    public function update(Request $request)
    {
        $aluno = $this->getAluno($request->id);
        $aluno->update($request->all());
        return redirect('/alunos');

    }
    protected function getAluno($id) {
        return $this->aluno->find($id);
    }

}
