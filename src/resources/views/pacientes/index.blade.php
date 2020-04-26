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
        <br/>
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/pacientes/busca') }}"
              method="post">
            <div>
                <input class="form-control mr-sm-2" type="search" name="criterio" placeholder="Pesquisar...">
                <button class="btn btn-outline-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/pacientes/criar" class="btn btn-outline-success ">Adicionar</a>
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ultima Consulta</th>
                    <th>CPF</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pacientes as $paciente)
                    <tr>
                        <td>
                            <a href="{{ url("/pacientes/show/$paciente->id") }}">
                                {{ $paciente->nome }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/pacientes/show/$paciente->id") }}">
                                {{ $paciente->celular }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/consulta/ultima/$paciente->id") }}" cllink="black">
                                Data da Última Consulta
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/pacientes/show/$paciente->id") }}" cllink="black">
                                {{ $paciente->cpf }}
                            </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <form class="navbar-form">
            <div class=text-right>
                <a href="/" class="btn btn-outline-danger mb-2">voltar</a>

            </div>
        </form>
    </div>
    <div>
    </div>

@endsection
