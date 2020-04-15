<?php


namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;


class AlunosController extends Controller
{
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
                "Aluno {$aluno->nome} cadastrado com sucesso!"
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
}
