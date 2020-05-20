@extends('layout')
<title>Início do Supervisor</title>
@section('cabecalho')
    Supervisores
@endsection

@section('conteudo')

    <div class="col-sm-12">
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif
        <br/>
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/supervisores/busca') }}"
              method="get">
            <div>
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio" placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/supervisores/criar" class="btn btn-success ">Adicionar</a>
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CRP</th>
                </tr>
                </thead>
                <tbody>
                @foreach($supervisores as $supervisor)

                    <tr>
                        <td>
                            <a href="{{ url("/supervisores/show/$supervisor->id") }}">
                                {{ $supervisor->nome }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/supervisores/show/$supervisor->id") }}">
                                {{ $supervisor->celular }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/supervisores/show/$supervisor->id") }}" cllink="black">
                                {{ $supervisor->email }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/supervisores/show/$supervisor->id") }}" cllink="black">
                                {{ $supervisor->crp }}
                            </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            {!! $supervisores->links() !!}
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
