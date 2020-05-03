<?php


namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Database\QueryException;
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

        $alunos = Aluno::query()->where('status', '=', 'aguardando')
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
        try {
            $aluno = Aluno::create($request->all());
            $request->session()
                ->flash(
                    'mensagem',
                    "Aluno cadastrado com sucesso!"
                );
            return redirect()->route('listar_alunos');
        } catch (QueryException $exception) {
            $aluno = $this->getAluno($request->id);
            return back()->withError("Matrícula ou CPF já se encontra no sistema");
        }
        return view('alunos.create');

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
        try {
            $aluno = $this->getAluno($request->id);
            $aluno->update($request->all());
            return redirect('/alunos');
        } catch (QueryException $exception) {

        $aluno = $this->getAluno($request->id);
        return back()->withError("CPF já se encontra no sistema");
    }
return view ('alunos.editar');
}
    protected function getAluno($id) {
        return $this->aluno->find($id);
    }

}
