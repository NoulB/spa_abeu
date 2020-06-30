@extends('layout')
<title>Início</title>

@section('cabecalho')
    Consultas de Hoje
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
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio"
                       placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

{{--            <a href="/consultas/criar" class="btn btn-success text-white ">Adicionar</a>--}}
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Paciente</th>
                    <th>Aluno</th>
                    <th>Hora</th>
                    <th>Consultório</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultas as $consulta)

                    <tr>
                        <td>
                            <a class="text-white" href="{{ url("/consultas/show/$consulta->id") }}">
                                {{ $consulta->paciente }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/consultas/show/$consulta->id") }}">
                                {{ $consulta->aluno }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/consultas/show/$consulta->id") }}" cllink="black">
                                {{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/consultas/show/$consulta->id") }}" cllink="black">
                                {{ $consulta->consultorio }}
                            </a>
                        </td>
                        <td align="right">
                            <form method="post" action="/consultas/confirmar/{{ $consulta->id }}" style="height: 1px"
                                  onsubmit="return confirm ('Confirmar realização de consulta?')">
                                @csrf
                                <button class="btn btn-success mb-2 btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                        </td>
                        <td align="right">
                            <form method="post" action="/consultas/cancelar/{{ $consulta->id }}" style="height: 1px"
                                  onsubmit="return confirm ('Tem certeza que deseja cancelar a consulta?')">
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
            {{--            {!! $consultas->links() !!}--}}
        </div>
        <form class="navbar-form">
            <div class=text-right>
                <a href="/consultas/criar" class="btn btn-success mb-2 text-white">Adicionar</a>
            </div>
        </form>
    </div>
    <div>
    </div>

@endsection
