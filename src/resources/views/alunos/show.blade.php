@extends('layout')
<title>Aluno</title>
@section('cabecalho')
    Aluno
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

            <div class="row">
                <div class="col">
                    <br/>
                    Nome:<br/>
                    <input class="form-control " readonly=“true” id="input1" placeholder="Nome completo"
                           value="{{ $aluno->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
                </div>
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
                    <input class="form-control" readonly id="inputcpf" placeholder="somente números" type="text"
                           name="cpf"
                           value="{{ $aluno->cpf }}" tabindex="3" onkeypress="return isNumberKey(event)" maxlength="11"
                           required/>
                </div>
                <div class=" col">
                    RG: <br/>
                    <input class="form-control" readonly id="input4" tabindex="4" placeholder="somente números"
                           type="text" name="rg" value="{{ $aluno->rg }}" onkeypress="return isNumberKey(event)"
                           required maxlength="16"/>
                </div>


                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-8" readonly id="input5" type="date" min="1800-12-31"
                           max="2999-12-31" name="data_nascimento"
                           value="{{ $aluno->data_nascimento }}" tabindex="5" required/>
                </div>
                <div class="col">
                    Sexo:
                    <select class="form-control col-md-8" readonly name="sexo" onfocus="disableFirstItemOnly(this);"
                            id="input6" tabindex="6" REQUIRED>

                        <option selected value="{{$aluno->sexo}}"> {{ $aluno->sexo }} </option>
                        <script type="text/javascript">
                            function disableFirstItemOnly(ddl) {
                                ddl.options[0].hidden = true;
                            }
                        </script>
                        <option onclick="Masculino"> Masculino</option>
                        <option onclick="Feminino">Feminino</option>

                    </select>
                </div>

                {{--                <div class="col">--}}
                {{--                    Idade:<br/>--}}
                {{--                    <input class="form-control col-md-6" type="num" name="idade" id="idade" class="form-control"--}}
                {{--                           placeholder="Idade" readonly=“true”--}}
                {{--                           value="{{\Carbon\Carbon::parse($aluno->data_nascimento)->age}}"--}}
                {{--                           required/>--}}
                {{--                </div>--}}
            </div>


            <br/>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div class="row">
                <div class="col">
                    Celular: <br/>
                    <input class="form-control " readonly=“true” id="input6"
                           placeholder="Celular - somente números" type="text" name="celular"
                           value="{{ $aluno->celular }}" tabindex="4" onkeypress="return isNumberKey(event)"/></div>
                <div class="col"></div>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        E-mail:<br/>
                        <input class="form-control " readonly=“true” id="input6"
                               placeholder="Celular - somente números" type="text" name="celular"
                               value="{{ $aluno->email }}" tabindex="4" onkeypress="return isNumberKey(event)"/>
                    </div>
                    <div class="col"></div>
                </div>
                <br/><br/>
                <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                    <a href="{{ url("/alunos/editar/$aluno->id") }}" class="btn btn-success">Editar</a>

                    <a href="{{ url("/alunos") }}" class="btn btn-danger">Voltar</a>
                    <a href="{{ url("/") }}" class="btn btn-primary">Home</a>
                </div>
                <br/>
            </div>
        </form>
    </div>

@endsection
