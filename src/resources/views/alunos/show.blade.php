@extends('layout')

@section('cabecalho')
    Alunos
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

        <form action="{{ url("/alunos/show/") }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $aluno->id }}">
            <div>
                <br/>
                Nome:<br/>
                <input class="form-control " readonly=“true” id="input1" placeholder="Nome completo"
                       value="{{ $aluno->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
            </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" readonly=“true” id="input2" placeholder="somente números"
                           type="text" name="matricula" value="{{ $aluno->id }}" tabindex="2"
                           onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" readonly=“true” id="input3" placeholder="somente números"
                           type="text"
                           name="cpf" value="{{ $aluno->cpf }}" tabindex="3" onkeypress="return isNumberKey(event)"
                           required/>
                </div>
                <div class="col">
                    RG: <br/>
                    <input class="form-control" readonly=“true” id="input4" tabindex="4"
                           placeholder="somente números"
                           value="{{ $aluno->rg }}" type="text" name="rg" onkeypress="return isNumberKey(event)"
                           required/>
                </div>


                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-8" readonly=“true” id="input7" type="date"
                           name="data_nascimento"
                           value="{{ $aluno->data_nascimento }}" tabindex="7" required/>
                </div>
                <div class="col">
                    Sexo:
                    <input type="text" name="sexo" readonly=“true” id="input8" tabindex="8" required
                            value="{{ $aluno->sexo }}">


                </div>
            </div>
            <br/>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div>
                Celular: <br/>
                <input class="form-control col-md-6" readonly=“true” id="input6"
                       placeholder="Celular - somente números" type="text" name="celular"
                       value="{{ $aluno->celular }}" tabindex="4" onkeypress="return isNumberKey(event)"/>
            </div>
            <div>
                E-mail:<br/>
                <input class="form-control col-md-6" readonly=“true” id="input6"
                       placeholder="Celular - somente números" type="text" name="celular"
                       value="{{ $aluno->email }}" tabindex="4" onkeypress="return isNumberKey(event)"/>
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <a href="{{ url("/alunos/editar/$aluno->id") }}" class="btn btn-outline-primary">editar</a>
                <a href="{{ url("/alunos") }}" class="btn btn-outline-danger">voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
