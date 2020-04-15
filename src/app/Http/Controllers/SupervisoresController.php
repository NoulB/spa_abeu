<?php


namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Http\Requests\SupervisorRequest;


class SupervisoresController extends Controller
{
    public function index(Request $request)
    {

        $supervisores = Supervisor::query()->where('status','=',true)
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('supervisores.index', compact('supervisores', 'mensagem'));

    }


    public function busca(Request $request)
    {
        $supervisores = Supervisor::busca($request->criterio);

        return view('supervisores.index', [
            'supervisores' => $supervisores,
            'criterio' => $request->criterio
        ]);

    }


    public function show($id)
    {
        $supervisor = Supervisor::find($id);

        return view('supervisores.show', compact('supervisor'));
    }


    public function create()
    {
        return view('supervisores.create');
    }


    public function store(SupervisorRequest $request)
    {
        $supervisor = Supervisor::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Supervisor {$supervisor->nome} cadastrado com sucesso!"
            );

        return redirect()->route('listar_supervisores');

    }
}
