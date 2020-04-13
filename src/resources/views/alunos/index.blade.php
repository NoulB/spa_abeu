@extends('layout')

@section('cabecalho')
Lista de Alunos
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

<a href="{{ route('form_criar_aluno') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($alunos as $aluno)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    {{ $aluno->nome }}
                </div>
                <div>
                    Celular: {{ $aluno->celular }}
                </div>
            </li>
        @endforeach
    </ul>

@endsection
