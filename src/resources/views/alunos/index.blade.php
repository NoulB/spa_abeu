@extends('layout')
<title>Início do Aluno</title>

@section('cabecalho')
    Alunos
@endsection

@section('conteudo')

    <div class="col-sm-12">
        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif
        <br/>
        <form class="form-inline my-2 my-lg-0 justify-content-between mb-" action="{{ url('/alunos/busca') }}"
              method="get">
            <div>
                <input class="form-control mr-sm-2" autocomplete="off" type="search" name="criterio" placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/alunos/criar" class="btn btn-success text-white">Adicionar</a>
            {{ csrf_field() }}

        </form>

        <div>
            <table class="table table-striped table-md table-borderless">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Projeto</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <td>
                            <a class="text-white" href="{{ url("/alunos/show/$aluno->id") }}">
                                {{ $aluno->nome }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/alunos/show/$aluno->id") }}">
                                {{ $aluno->celular }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/alunos/show/$aluno->id") }}" cllink="black">
                                {{--("/alunos/email/$aluno->id")--}}
                                {{ $aluno->email }}
                            </a>
                        </td>
                        <td>
                            <a class="text-white" href="{{ url("/alunos/show/$aluno->id") }}" cllink="black">
                                {{--("/alunos/email/$aluno->id")--}}
                                GRUPO {{--{{ $aluno->email }}--}}
                            </a>
                        </td>
                    </tr>
            @endforeach
                </tbody>
            </table>
            {!! $alunos->links() !!}
        </div>

            <form class="navbar-form">
                <div class=text-right>
                    <a href="/" class="btn btn-danger mb-2 text-white">Voltar</a>

                </div>
            </form>
    </div>
    <div>
    </div>

@endsection
