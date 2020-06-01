@extends('layout')
<title>Cadastro de Aluno</title>

@section('cabecalho')
    Cadastro de Aluno
@endsection
{{--
<title>Tela de Cadastro de Alunos</title>
--}}

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
            <div class="row">
                <div class="col">
                    <br/>
                Nome:<br/>
                <input class="form-control" autocomplete="novo-nome" id="input1" placeholder="Nome completo"
                       type="text" name="nome" tabindex="1" required autofocus maxlength="250"/>
            </div>
{{--            <div class="col">--}}
{{--                <br/>--}}
{{--                Data de Inscrição de Aluno: <br/>--}}
{{--                <input class="form-control col-md-5"  id="createate" type="date" name="createate"--}}
{{--                       name="Data do Cadastro do Paciente"--}}
{{--                       onkeypress="return isNumberKey(event)"/>--}}
{{--            </div>--}}

    </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" autocomplete="nova-matricula" id="input2" placeholder="somente números"
                           type="text" name="id" tabindex="2"
                           onkeypress="return isNumberKey(event)" maxlength="8" required/>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" autocomplete="novo=cpf" id="inputcpf" placeholder="somente números" type="text" name="cpf"
                           tabindex="3" onkeypress="return isNumberKey(event)" maxlength="11" OnBlur="ValidaCPF()" onclick="desvalidarCPF()" required/>
                </div>
                <div class=" col">
                    RG: <br/>
                    <input class="form-control" autocomplete="novo-rg" id="input3" tabindex="4" placeholder="somente números"
                           type="text" name="rg" onkeypress="return isNumberKey(event)"
                           required maxlength="16"/>
                </div>
                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-8" autocomplete="novo-nasc" id="data_nasc" type="date" min="1800-12-31" max="2999-12-31"  name="data_nascimento" tabindex="5" OnBlur="ValidaDATA()"
                            required/>
                </div>
                <div class="col">
                    Sexo:
                    <select class="form-control col-md-8" name="sexo" id="input6" tabindex="6">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        required
                    </select>
                </div>
{{--                <div class="col">--}}
{{--                    Idade:<br/>--}}
{{--                    <input class="form-control col-md-7" type="num" name="idade" id="idade" class="form-control" placeholder="Idade" disabled>--}}
{{--                </div>--}}

            </div>
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    Sexo:--}}
{{--                    <select class="form-control " name="sexo" id="input6" tabindex="6">--}}
{{--                        <option value="Masculino">Masculino</option>--}}
{{--                        <option value="Feminino">Feminino</option>--}}
{{--                        required--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="col"></div>--}}
{{--                <div class="col"></div>--}}
{{--                <div class="col"></div>--}}

{{--            </div>--}}
            <br/>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div class="row">
                <div class="col">
                Celular: <br/>
                <input class="form-control" autocomplete="novo-cel" id="inputcel"
                       placeholder="Celular - somente números" type="text" name="celular"
                       tabindex="7"  onkeypress="return isNumberKey(event)"   maxlength="11" OnBlur="ValidaCEL()" onclick="desvalidarCEL()"/>
            </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                E-mail:<br/>
                <input class="form-control" autocomplete="novo-mail" id="input8" placeholder="e-mail" type="text" tabindex="8"
                       name="email" maxlength="64"/>
            </div>
                <div class="col"></div>
            </div>

                <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ url("/alunos") }}" class="btn btn-danger">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-primary">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
