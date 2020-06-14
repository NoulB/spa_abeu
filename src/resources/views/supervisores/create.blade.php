@extends('layout')
<title>Cadastro de Supervisor</title>
@section('cabecalho')
    Cadastro de Supervisor
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
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        <form name="form1" method="post">
            @csrf
            <div>
                <br/>
                <a class="text-white">Nome:</a>
                <input class="form-control" autocomplete="novo-nome" id="input1" placeholder="Nome completo"
                       type="text" name="nome" tabindex="1" required autofocus maxlength="256"/>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white">Matricula:</a>
                    <input class="form-control" autocomplete="novo-" id="input2" placeholder="somente números"
                           type="text" name="id" tabindex="2" onkeypress="return isNumberKey(event)" maxlength="8" required/>
                </div>
                <div class="col">
                    <a class="text-white">CRP:</a>
                    <input class="form-control" autocomplete="novo-" id="input3" placeholder="Ex: 12345/5"
                           type="text" name="crp" tabindex="3" maxlength="16">
                </div>
            </div>

            <br>
            <div>
                <h4 class="text-white">Contatos:</h4>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white">Celular:</a>
                <input class="form-control " autocomplete="novo-" id="inputcel" placeholder="somente números"
                       type="text" name="celular" tabindex="4" onkeypress="return isNumberKey(event)"maxlength="11" OnBlur="ValidaCEL()" onclick="desvalidarCEL()"/>
            </div>
                <div class="col"></div></div>
                <div class="row">
                    <div class="col">
                        <a class="text-white">E-mail:</a>
                <input class="form-control " autocomplete="novo-" id="input5" placeholder="e-mail"
                       type="text" name="email" tabindex="5" maxlength="64"/>
            </div>
                    <div class="col"></div></div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ url("/supervisores") }}" class="btn btn-danger">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-primary">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
