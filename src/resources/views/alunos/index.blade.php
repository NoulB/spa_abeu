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
              method="post">
            <div>
                <input class="form-control mr-sm-2" type="search" name="criterio" placeholder="Pesquisar...">
                <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>

            <a href="/alunos/criar" class="btn btn-success ">Adicionar</a>
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
                            <a href="{{ url("/alunos/show/$aluno->id") }}">
                                {{ $aluno->nome }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/alunos/show/$aluno->id") }}">
                                {{ $aluno->celular }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/alunos/email/$aluno->id") }}" cllink="black">
                                {{ $aluno->email }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ url("/alunos/email/$aluno->id") }}" cllink="black">
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
                    <a href="/" class="btn btn-danger mb-2">Voltar</a>

                </div>
            </form>
    </div>
    <div>
    </div>

@endsection
