@extends('layout')
<title>Início do Paciente</title>
@section('cabecalho')
    Pacientes
@endsection

@section('conteudo')

    <div class="col-sm-12 ">
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif
        <br/>
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/pacientes/busca') }}"
              method="get">
            <div>
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio"
                       placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/pacientes/criar" class="btn btn-success text-white">Adicionar </a>
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Idade</th>
                    <th>CPF</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <td>
                            <a class="text-white" href="{{ url("/pacientes/show/$paciente->id") }}">
                                {{ $paciente->nome }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/pacientes/show/$paciente->id") }}">
                                {{ $paciente->celular }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/pacientes/show/$paciente->id") }}" cllink="black">
                                {{\Carbon\Carbon::parse($paciente->data_nascimento)->age}}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/pacientes/show/$paciente->id") }}" cllink="black">
                                {{ $paciente->cpf }}
                            </a>
                        </td>
                        <td align="right">
                            <form method="post" action="/consultas/buscar/{{ $paciente->id }}" style="height: 1px">
                                @csrf
                                <button class="btn btn-info mb-2 btn-sm" >consulta</button>
                            </form>
                        </td>
                        <td align="right">
                            <form method="post" action="/pacientes/remover/{{ $paciente->id }}" style="height: 15px"
                                  onsubmit="return confirm ('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-2 btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col">
                {!! $pacientes->links() !!}
            </div>
            <div class="col">
                <form class="navbar-form">
                    <div class=text-right>
                        <a href="/" class="btn btn-danger mb-2 text-white">Voltar</a>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <div>
    </div>

@endsection
