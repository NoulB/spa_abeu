@extends('layout')
<title>Início</title>
@section('cabecalho')
    SPA Uniabeu
@endsection

@section('conteudo')

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h2 class="display-4">Bem Vindo!</h2>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pacientes</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastro do Pacientes</li>
                        <li>Editar Pacientes</li>
                        <li>Buscar pacientes</li>
                        <li>Listar Pacientes</li>
                    </ul>
                    <a href="/pacientes" class="btn btn-lg btn-block btn-primary">Pacientes</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Supervisores</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastro dos Supervisores</li>
                        <li>Editar Supervisores</li>
                        <li>Buscar Supervisore</li>
                        <li>Listar Supervisore</li>
                    </ul>
                    <a href="/supervisores" class="btn btn-lg btn-block btn-primary">Supervisores</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Alunos</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastro dos Alunos</li>
                        <li>Editar Alunos</li>
                        <li>Buscar Alunos</li>
                        <li>Listar Alunos</li>
                    </ul>
                    <a href="/alunos" class="btn btn-lg btn-block btn-primary">Alunos</a>
                </div>
            </div>
        </div>

    </div>




    {{-- <div class="mr-sm-2">

         <div>
             <a href="/pacientes" class="btn btn-primary mb-2">Pacientes</a>
         </div>
         <div>
             <a href="/supervisores" class="btn btn-primary mb-2">Supervisores</a>
         </div>
         <div>
             <a href="/alunos" class="btn btn-primary mb-2">Alunos</a>
         </div>--}}



@endsection
