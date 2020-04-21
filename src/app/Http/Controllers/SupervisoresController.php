<?php


namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Requests\SupervisorRequest;

use mysql_xdevapi\Warning;


class SupervisoresController extends Controller
{
    private $supervisor;
    public function __construct()
    {
        $this->supervisor = new Supervisor();
    }

    public function index(Request $request)
    {

        $supervisores = Supervisor::query()->where('status','=',1)
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
        try {
            $supervisor = Supervisor::create($request->all());
            $request->session()
                ->flash(
                    'mensagem',
                    "Supervisor {$supervisor->nome} cadastrado com sucesso!"
                );

            return redirect()->route('listar_supervisores');
        }
        catch(QueryException $exception) {
            $supervisor=$this->getSupervisor($request->id);
            return back()->withError("Matrícula já se encontra no sistema");
        }
        return view('supervisores.create');

    }
    public function edit($id)
    {
         return view('supervisores.editar', [
             'supervisor' => $this->getSupervisor($id)
         ]);

    }

    public function update(Request $request)
    {
        $supervisor = $this->getSupervisor($request->id);
        $supervisor->update($request->all());
        return redirect('/supervisores');

    }
    protected function getSupervisor($id) {
        return $this->supervisor->find($id);
    }


}
