@extends('layout')
<title>Supervisor</title>
@section('cabecalho')
    Supervisor
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

        <div action="{{ url("/supervisores/show/") }}" method="post">
            @csrf
            <div>
                <br/>
                <a class="text-white">Nome:</a>
                <input class="form-control" readonly=“true” id="input1" placeholder="Nome completo"
                       value="{{ $supervisor->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white">Matricula:</a>
                    <input class="form-control" readonly=“true” id="input2" placeholder="somente números" type="text"
                           name="id" value="{{ $supervisor->id }}" tabindex="2" onkeypress="return isNumberKey(event)"
                           required/>
                </div>
                <div class="col">
                    <a class="text-white">CRP:</a>
                    <input class="form-control" readonly=“true” id="input3" placeholder="Ex: 12345/5"
                           value="{{ $supervisor->crp }}" type="text" name="crp" tabindex="3"/>
                </div>
            </div>

            <br>
            <div>
                <h4 class="text-white">Contatos:</h4>
            </div>
            <div class="row">

            <div class="col">
                <a class="text-white">Celular:</a>
                <input class="form-control " readonly=“true” id="input4"
                       placeholder="Celular - somente números" type="text" name="celular"
                       value="{{ $supervisor->celular }}" tabindex="4" onkeypress="return isNumberKey(event)"/>
            </div>
            <div class="col"></div></div>
            <div class="row">
            <div class="col">
                <a class="text-white">E-mail:</a>
                <input class="form-control " readonly=“true” id="input5"
                       placeholder="Celular - somente números" type="text" name="email"
                       value="{{ $supervisor->email }}" tabindex="5"/>
            </div>
            <div class="col"></div></div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">

                <a href="{{ url("/supervisores/editar/$supervisor->id") }}" class="btn btn-success text-white">Editar</a>
                <a href="{{ url("/supervisores") }}" class="btn btn-danger text-white">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-primary text-white">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
