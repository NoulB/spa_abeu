<?php


namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;


class SupervisoresController extends Controller
{
//    public function index(Request $request)
//    {
//
//
//        return view('supervisores.index');
//    }

    public function create()
    {
        return view('supervisores.create');
    }

    public function store(Request $request)
    {
        $supervisor = Supervisor::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Supervisor {$supervisor->nome} cadastrado com sucesso!"
            );
        return redirect()->route('listar_pacientes');
    }
}
