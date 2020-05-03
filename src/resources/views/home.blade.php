@extends('layout')

@section('conteudo')
        <meta http-equiv="refresh" content="10; URL='/'"/>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem vindo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está logado!
                </div>
                <div>
                    <a href="{{ url("/") }}" style="float: right" class="btn btn-outline-primary">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
