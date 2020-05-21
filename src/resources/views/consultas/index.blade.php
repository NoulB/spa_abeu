@extends('layout')

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
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio" placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/consultas/criar" class="btn btn-success ">Adicionar</a>
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Supervisor</th>
                    <th>Hora</th>
                    <th>Consultório</th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultas as $consulta)

                    <tr>
                        <td>
                            <a href="{{ url("/consultas/show/$consulta->id") }}">
                                {{ $consulta->aluno }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/consultas/show/$consulta->id") }}">
                                {{ $consulta->supervisor }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/consultas/show/$consulta->id") }}" cllink="black">
                                {{ $consulta->dia }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/consultas/show/$consulta->id") }}" cllink="black">
                                {{ $consulta->consultorio }}
                            </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
{{--            {!! $consultas->links() !!}--}}
        </div>
        <form class="navbar-form">
            <div class=text-right>
                <a href="/" class="btn btn-danger mb-2">Voltar</a>

            </div>
        </form>
    </div>
    <div>
    </div>

@endsection
