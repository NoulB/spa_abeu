@extends('layout')

@section('cabecalho')
    Pacientes
@endsection

@section('conteudo')

    <div class="col-sm-12">

        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif

        <form class="form-inline my-2 my-lg-0 justify-content-between" action="{{ url('/pacientes/busca') }}"
              method="post">
            <a href="/pacientes/criar" class="btn btn-primary mb-2">Cadastrar Paciente</a>
            {{ csrf_field() }}
            <div>
                <input class="form-control mr-sm-2" type="search" name="criterio" placeholder="Pesquisar Paciente...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>
        </form>


        <div class="card-columns" id="alinha">
            @foreach($pacientes as $paciente)
                <li class="list-group-item" style="background-color: #e3f2fd;">
                    {{ $paciente->nome }}
                    <a href="{{ url("/pacientes/editar/$paciente->id") }}" class="btn btn-xs btn-primary btn-action">
                        <i class="fas fa-pencil-alt" float="right"></i>
                    </a>
                </li>
                <li class="list-group-item">
                    Celular: {{ $paciente->celular }}
                </li></br>
            @endforeach
        </div>
    </div>
@endsection
