<?php


namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use App\Http\Requests\SupervisorRequest;


class SupervisoresController extends Controller
{
    public function index(Request $request)
    {

        $supervisores = Supervisor::query()->where('status','=','1')
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('supervisores.index', compact('supervisores', 'mensagem'));

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
