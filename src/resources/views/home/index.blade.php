@extends('layout')
<title>Início</title>
@section('cabecalho')
    SPA Uniabeu
@endsection

@section('conteudo')

    <div class="pricing-header px-3 py-3 pt-md-2 pb-md-4 mx-auto text-center">
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/pacientes/busca') }}"
              method="get">
            <div>
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio"
                       placeholder="Pesquisar por paciente...">
                <button class="btn btn-primary  " type="submit"><i class="fas fa-search"></i>
                </button>
            </div>
            <a href="/pacientes/criar" class="btn btn-success text-white">Adicionar Paciente</a>
            {{ csrf_field() }}
        </form>
        <h2 class="display-4 text-white">Bem Vindo!</h2>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center text-white ">
            <div class="card mb-4 shadow-sm bg-secondary">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pacientes</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastrar Pacientes</li>
                        <li>Editar Pacientes</li>
                        <li>Buscar pacientes</li>
                        <li>Listar Pacientes</li>
                    </ul>
                    <a href="/pacientes" class="btn btn-lg btn-block btn-primary text-white">Pacientes</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm bg-secondary">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal ">Supervisores</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastrar Supervisores</li>
                        <li>Editar Supervisores</li>
                        <li>Buscar Supervisore</li>
                        <li>Listar Supervisore</li>
                    </ul>
                    <a href="/supervisores" class="btn btn-lg btn-block btn-primary text-white">Supervisores</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm bg-secondary">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Alunos</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastrar Alunos</li>
                        <li>Editar Alunos</li>
                        <li>Buscar Alunos</li>
                        <li>Listar Alunos</li>
                    </ul>
                    <a href="/alunos" class="btn btn-lg btn-block btn-primary text-white">Alunos</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm bg-secondary">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Consultas</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastrar Consultas</li>
                        <li>Cancelar Consultas</li>
                        <li>Buscar Consultas</li>
                        <li>Listar Consultas</li>
                    </ul>
                    <a href="/consultas" class="btn btn-lg btn-block btn-primary text-white">Consultas</a>
                </div>
            </div>
            <div class="card mb-4 shadow-sm bg-secondary">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Projetos</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cadastrar Projetos</li>
                        <li>Cancelar Projetos</li>
                        <li>Buscar Projetos</li>
                        <li>Listar Projetos</li>
                    </ul>
                    <a href="/projetos" class="btn btn-lg btn-block btn-primary text-white">Projetos</a>
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
