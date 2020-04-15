@extends('layout')

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

        <form method="post">
            @csrf
            <div>
                <br/>
                Nome:<br/>
                <input class="form-control" id="input1" placeholder="Nome completo"
                       type="text" name="nome" tabindex="1" required autofocus/>
            </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" id="input2" placeholder="somente números"
                           type="text" name="id" tabindex="2" onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col">
                    CRP: <br/>
                    <input class="form-control" id="input3" placeholder="Ex: 12345/5"
                           type="text" name="crp" tabindex="3">
                </div>
            </div>

            <br>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div>
                Celular: <br/>
                <input class="form-control col-md-6" id="input4" placeholder="somente números"
                       type="text" name="celular" tabindex="4" onkeypress="return isNumberKey(event)"/>
            </div>
            <div>
                E-mail:<br/>
                <input class="form-control col-md-6" id="input5" placeholder="e-mail"
                       type="text" name="email" tabindex="5"/>
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-outline-primary">Adicionar</button>
                <a href="{{ url("/supervisores") }}" class="btn btn-outline-danger">voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
