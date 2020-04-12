<?php


namespace App\Http\Controllers;


class AlunosController extends Controller
{
    public function index(Request $request)
    {
//        $alunos = Alunos::query()
//            ->orderBy('nome')
//            ->get();
//        $mensagem = $request->session()->get('mensagem');


        return view('alunos.index');
    }

    public function create()
    {
        return view('alunos.create');
    }
}
