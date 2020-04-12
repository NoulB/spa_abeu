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



        <form action="{{ url('/pacientes/busca') }}" method="post">
            <div class="input-group mb-3">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="criterio" placeholder="Pesquisa...">
                <div class="input-group-btn">
                    <button class="btn btn-outline-secondary" type="submit">ok</button>
                </div>
            </div>
        </form>

            <a href="/pacientes/criar" class="btn btn-dark mb-2">Cadastrar Paciente</a>


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

    </div>
@endsection
