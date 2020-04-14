@extends('layout')

@section('cabecalho')
    Alunos
@endsection

@section('conteudo')

    <div class="col-sm-12">
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif

        <form class="form-inline my-2 my-lg-0 justify-content-between" action="{{ url('/alunos/busca') }}"
              method="post">
            <a href="/alunos/criar" class="btn btn-outline-primary mb-2">Adicionar</a>
            {{ csrf_field() }}
            <div>
                <input class="form-control mr-sm-2" type="search" name="criterio" placeholder="Pesquisar Aluno...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>
        </form>


        <div class="card-columns" id="alinha">
            @foreach($alunos as $aluno)
                <div class="card">
                    <li class="list-group-item" style="background-color: #e3f2fd;">
                        {{ $aluno->nome }}
                        <a href="{{ url("/supervisores/excluir/$aluno->id") }}"
                           class="btn btn-sm btn-outline-danger btn-action">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="{{ url("/alunos/editar/$aluno->id") }}" class="btn btn-sm btn-outline-primary btn-action">
                            <i class="fas fa-pencil-alt" float="right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        Celular: {{ $aluno->celular }}
                    </li>
                </div>
            @endforeach
        </div>
        <div>
            <a href="/" class="btn btn-outline-danger mb-2">voltar</a>
        </div>
    </div>
@endsection
