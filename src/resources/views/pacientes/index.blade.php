@extends('layout')

@section('cabecalho')
    Consultar de Pacientes
@endsection

@section('conteudo')
    <a href="/pacientes/criar" class="btn btn-dark mb-2">Adicionar</a>

{{--    <ul class="list-group">--}}
{{--        @foreach($pessoas as $pessoa)--}}
{{--            <li class="list-group-item">{{ $pessoa->nome }}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
@endsection
