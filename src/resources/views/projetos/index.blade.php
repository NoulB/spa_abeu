@extends('layout')
<title>Projetos</title>
@section('cabecalho')
    Projetos
@endsection

@section('conteudo')

    <div class="col-sm-12 ">
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif
        <br/>
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/projetos/busca') }}"
              method="get">
            <div>
{{--                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio"--}}
{{--                       placeholder="Pesquisar...">--}}
{{--                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>--}}
{{--                </button>--}}
            </div>

            <a href="/projetos/criar" class="btn btn-success text-white">Adicionar </a>
            @csrf

        </form>
            <br>
        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>dia</th>
                    <th>Projeto</th>
                    <th>Supervisor</th>
                    <th>Área</th>
                    <th>Hora</th>
{{--                    <th></th>--}}
                    <th>Vagas</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projetos as $projeto)
                    <tr>
                        <td>
                            <a class="text-white" href="{{ url("#") }}">
                                {{ $projeto->dia }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("#") }}">
                                {{ $projeto->projeto }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("#") }}" cllink="black">
                                {{$projeto->supervisor}}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("#") }}" cllink="black">
                                {{ $projeto->area_de_estagio }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("#") }}" cllink="black">
                                {{ \Carbon\Carbon::createFromFormat('H:i:s',$projeto->inicio)->format('H:i') }}
                                -
                                {{ \Carbon\Carbon::createFromFormat('H:i:s',$projeto->fim)->format('H:i') }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("#") }}" cllink="black">
                                {{ $projeto->vagas }}
                            </a>
                        </td>
                        <td>


                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
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
