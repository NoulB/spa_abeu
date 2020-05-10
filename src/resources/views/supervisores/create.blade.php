@extends('layout')
<title>Cadastro de Supervisores</title>
@section('cabecalho')
    Cadastro de Supervisores
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
                Nome:<br/>
                <input class="form-control" id="input1" placeholder="Nome completo"
                       type="text" name="nome" tabindex="1" required autofocus maxlength="256"/>
            </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" id="input2" placeholder="somente números"
                           type="text" name="id" tabindex="2" onkeypress="return isNumberKey(event)" maxlength="8" required/>
                </div>
                <div class="col">
                    CRP: <br/>
                    <input class="form-control" id="input3" placeholder="Ex: 12345/5"
                           type="text" name="crp" tabindex="3" maxlength="16">
                </div>
            </div>

            <br>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div class="row">
                <div class="col">
                Celular: <br/>
                <input class="form-control " id="inputcel" placeholder="somente números"
                       type="text" name="celular" tabindex="4" onkeypress="return isNumberKey(event)"maxlength="11" OnBlur="ValidaCEL()" onclick="desvalidarCEL()"/>
            </div>
                <div class="col"></div></div>
                <div class="row">
                    <div class="col">
                E-mail:<br/>
                <input class="form-control " id="input5" placeholder="e-mail"
                       type="text" name="email" tabindex="5" maxlength="64"/>
            </div>
                    <div class="col"></div></div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-outline-primary">Adicionar</button>
                <a href="{{ url("/supervisores") }}" class="btn btn-outline-danger">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
