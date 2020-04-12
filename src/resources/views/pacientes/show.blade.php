@extends('layout')

@section('cabecalho')
    Consultar de Pacientes
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
            <li class="list-group-item">{{ $paciente->nome }}, Celular: {{ $paciente->celular }}</li>
        @endforeach
    </ul>
@endsection
