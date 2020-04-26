@extends('layout')

@section('cabecalho')
    SPA Uniabeu
@endsection

@section('conteudo')

    <div class="mr-sm-2">

        <div>
            <a href="/pacientes" class="btn btn-primary mb-2">Pacientes</a>
        </div>
        <div>
            <a href="/supervisores" class="btn btn-primary mb-2">Supervisores</a>
        </div>
        <div>
            <a href="/alunos" class="btn btn-primary mb-2">Alunos</a>
        </div>



    </div>
@endsection
