@extends('layout')

@section('cabecalho')
    Editar Cadastro de Aluno
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
        <form name="form1" action="{{ url('alunos/update') }}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $aluno->id }}">

            <div>
                <br/>
                Nome:<br/>
                <input class="form-control " id="input1" placeholder="Nome completo"
                       type="text" name="nome" value="{{ $aluno->nome }}" tabindex="1" required autofocus/>
            </div>
            <div class="row">
                <div class="col">
                    Matricula: <br/>
                    <input class="form-control" id="input2" placeholder="somente números"
                           type="text" name="id" value="{{ $aluno->id }}" tabindex="2" readonly
                           onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" id="inputcpf" placeholder="somente números" type="text" name="cpf"
                           value="{{ $aluno->cpf }}" tabindex="3" onkeypress="return isNumberKey(event)" maxlength="11"
                           OnBlur="ValidaCPF()" required/>
                </div>
                <div class=" col">
                    RG: <br/>
                    <input class="form-control" id="input4" tabindex="4" placeholder="somente números"
                           type="text" name="rg" value="{{ $aluno->rg }}" onkeypress="return isNumberKey(event)"
                           required/>
                </div>


                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-8" id="input5" type="date" name="data_nascimento"
                           value="{{ $aluno->data_nascimento }}" tabindex="5" required/>
                </div>
                <div class="col">
                    Sexo:
                    <select class="form-control col-md-8" name="sexo" onfocus="disableFirstItemOnly(this);" id="input6" tabindex="6" REQUIRED>

                        <option selected value="{{$aluno->sexo}}"> {{ $aluno->sexo }} </option>
                            <script type="text/javascript">
                              function disableFirstItemOnly(ddl) {
                                  ddl.options[0].hidden = true;
                              }
                            </script>
                        <option onclick="Masculino"> Masculino </option>
                        <option onclick="Feminino">Feminino</option>

                    </select>
                </div>
            </div>
            <br/>
            <div>
                <h4>Contatos:</h4>
            </div>
            <div>
                Celular: <br/>
                <input class="form-control col-md-6" id="inputcel"
                       placeholder="Celular - somente números" type="text" name="celular"
                       value="{{ $aluno->celular }}" tabindex="7" onkeypress="return isNumberKey(event)"  maxlength="11" OnBlur="ValidaCEL()"/>
            </div>
            <div>
                E-mail:<br/>
                <input class="form-control col-md-6" id="input8" placeholder="e-mail" type="text" tabindex="8"
                       name="email" value="{{ $aluno->email }}"/>
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-outline-primary">Salvar</button>
                <a href="{{ url("/alunos") }}" class="btn btn-outline-danger">voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
