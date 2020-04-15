@extends('layout')

@section('cabecalho')
    Supervisores
@endsection

@section('conteudo')

    <div class="col-sm-12" >

        @if(!empty($mensagem))
            <div class="alert alert-success">
                {{ $mensagem }}
            </div>
        @endif


        <form class="form-inline my-2 my-lg-0 justify-content-between" action="{{ url('/supervisores/busca') }}"
              method="post">
            <a href="/supervisores/criar" class="btn btn-outline-primary mb-2">Adicionar</a>


{{--            PAGINAÇÃO--}}

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
{{--            FIM PAGINAÇÃO--}}


            {{ csrf_field() }}
            <div >
                <input class="form-control mr-sm-2" type="search" name="criterio" placeholder="Pesquisar Supervisor...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>
        </form>



        <div class="card-columns" id="alinha">
            @foreach($supervisores as $supervisor)
                <div class="card">
                    <li class="list-group-item" style="background-color: #e3f2fd;">
                        {{ $supervisor->nome }}
                        <a href="{{ url("/supervisores/excluir/$supervisor->id") }}"
                           class="btn btn-sm btn-outline-danger btn-action">
                            <i class="fas fa-trash-alt"></i>
                        </a>
{{--                        <a href="{{action('SupervisoresController@edit', $row['id'])}}"></a>--}}
                        <a href="{{ url("/supervisores/editar/$supervisor->id") }}"
                           class="btn btn-sm btn-outline-primary btn-action">
                            <i class="fas fa-pencil-alt" float="right"></i>
                        </a>
                    </li>
                    <li class="list-group-item">
                        Celular: {{ $supervisor->celular }}
                    </li>
                </div>
            @endforeach
        </div>
            <div>
                <a href="/" class="btn btn-outline-danger mb-2">voltar</a>
            </div>
    </div>


@endsection
