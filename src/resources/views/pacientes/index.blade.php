@extends('layout')

@section('cabecalho')
    Lista de Pacientes
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/pacientes/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($pacientes as $paciente)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    {{ $paciente->nome }}
                </div>
                <div>
                    Celular: {{ $paciente->celular }}
                </div>
            </li>
        @endforeach
    </ul>
@endsection
