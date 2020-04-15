@extends('layout')

@section('cabecalho')
    Supervisores
@endsection

@section('conteudo')
    <div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url("/supervisores/show/") }}" method="post">
            @csrf
            <div>
                <br/>
                Nome:<br/>
                <input class="form-control" readonly=“true” id="input1" placeholder="Nome completo"
                       value="{{ $supervisor->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
            </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" readonly=“true” id="input2" placeholder="somente números"
                           type="text" name="id" value="{{ $supervisor->id }}" tabindex="2"
                           onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col">
                    CRP: <br/>
                    <input class="form-control" readonly=“true” id="input3" placeholder="Ex: 12345/5"
                           value="{{ $supervisor->crp }}" type="text" name="crp" tabindex="3"/>
                </div>
            </div>

            <br>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div>
                Celular: <br/>
                <input class="form-control col-md-6" readonly=“true” id="input4"
                       placeholder="Celular - somente números" type="text" name="celular"
                       value="{{ $supervisor->celular }}" tabindex="4" onkeypress="return isNumberKey(event)"/>
            </div>
            <div>
                E-mail:<br/>
                <input class="form-control col-md-6" readonly=“true” id="input5"
                       placeholder="Celular - somente números" type="text" name="email"
                       value="{{ $supervisor->email }}" tabindex="5" />
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">

                <a href="{{ url("/#") }}" class="btn btn-outline-primary">editar</a>
                <a href="{{ url("/supervisores") }}" class="btn btn-outline-danger">voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
