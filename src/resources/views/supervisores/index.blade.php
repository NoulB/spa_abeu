@extends('layout')

@section('cabecalho')
Lista de Supervisores
@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

<a href="{{ route('form_criar_supervisores') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($supervisores as $supervisor)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    {{ $supervisor->nome }}
                </div>
                <div>
                    Celular: {{ $supervisor->celular }}
                </div>
            </li>
        @endforeach
    </ul>

@endsection
