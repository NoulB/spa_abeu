@extends('layout')
<title>Paciente</title>
@section('cabecalho')
    Paciente
@endsection

@section('conteudo')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url("/pacientes/show/") }}" method="post">
        @csrf
        <div class="row">
            <div class="col">
            <br/>
            Nome:<br/>
            <input class="form-control " readonly=“true” id="input1" placeholder="Nome completo"
                   value="{{ $paciente->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
            </div>
            <div class="col">
                <br/>
                Data de Incrição do Paciente: <br/>
                <input class="form-control col-md-5" readonly=“true” id="createate" type="datetime"
                       name="Data do Cadastro do Paciente"
                       value="{{\Carbon\Carbon::parse($paciente->createate)->format('d/m/Y')}}" required
                       tabindex="19"
                       onkeypress="return isNumberKey(event)"/>

        </div>
        </div>

        <div class="row">
            <div class="col">
                CPF: <br/>
                <input class="form-control" readonly=“true” id="input2" placeholder="somente números" type="text"
                       name="cpf"
                       value="{{ $paciente->cpf }}" tabindex="2"
                       onkeypress="return isNumberKey(event)" required/>
            </div>
            <div class="col">
                RG: <br/>
                <input class="form-control" readonly=“true” id="input3" placeholder="somente números"
                       value="{{ $paciente->rg }}" type="text"
                       name="rg" tabindex="3"
                       onkeypress="return isNumberKey(event)" required/>
            </div>
            <div class="col">
                Data de Nascimento:<br/>
                <input class="form-control col-md-8" readonly=“true” id="input4" type="date" name="data_nascimento"
                       value="{{ $paciente->data_nascimento }}" tabindex="4" required/>
            </div>
            <div class="col">
                Idade:<br/>
                <input class="form-control col-md-6" type="num" name="idade" id="idade" class="form-control" placeholder="Idade" readonly=“true”
                       value= "{{\Carbon\Carbon::parse($paciente->data_nascimento)->age}}"
            required/>
        </div>

            </div>
        <div>
            <div class="row">
                <div class="col">
                    E-mail: <br/>
                    <input class="form-control" readonly=“true” id="input5" placeholder="E-mail" type="text"
                           name="email"
                           value="{{ $paciente->email }}" tabindex="6"/>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                    Celular: <br/>
                    <input class="form-control col-md-7" readonly=“true” id="input6"
                           placeholder="Celular - somente números" type="text"
                           name="celular"
                           value="{{ $paciente->celular }}"
                           tabindex="7" onkeypress="return isNumberKey(event)"/>
                        </div>
                <div class="col">
                    <div class="row">

                        <div class="col">
                    Telefone:<br/>
                    <input class="form-control col-md-7" readonly=“true” id="input7" placeholder="Telefone 2"
                           type="text" name="telefone"
                           value="{{ $paciente->telefone }}"
                           tabindex="8"
                           onkeypress="return isNumberKey(event)"/>
                        </div></div></div>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col">
                    Nome do Pai:<br/>
                    <input class="form-control" readonly=“true” id="input8" placeholder="Nome do Pai" type="text"
                           name="pai"
                           value="{{ $paciente->pai }}" tabindex="9"/>
                </div>
                <div class="col">
                    Nome do Mae:<br/>
                    <input class="form-control" readonly=“true” id="input9" placeholder="Nome da Mãe" type="text"
                           name="mae" value="{{ $paciente->mae }}" required tabindex="10"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        Sexo:
                        <input class="form-control col-md-6" name="sexo" readonly=“true” id="input10" tabindex="10"
                               value="{{ $paciente->sexo }}">
                    </div>
                    <div class="col">
                        Estado civil:
                        <input class="form-control col-md-6" readonly=“true” id="input11" name="estado_civil"
                               value="{{ $paciente->estado_civil }}">
                    </div>
                </div>
            </div>
            <div class="col">
                Cônjuge:
                <input class="form-control" readonly=“true” id="input12" placeholder="Não é casado..."
                       value="{{ $paciente->conjuge }}"
                       type="text" id="input" name="conjuge"/>
            </div>
        </div>
        <div>

        </div>
        <br/>
        <div>
            <h4>Endereço:</h4>
        </div>
        <div class="row">
            <div class="col">
                Logradouro:<br/>
                <input class="form-control" readonly=“true” id="input13" placeholder="Logradouro" type="text"
                       name="logradouro"
                       value="{{ $paciente->logradouro }}" required tabindex="14"/>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        Número:<br/>
                        <input class="form-control col-md-6" readonly=“true” id="input14" placeholder="Numero"
                               type="text" name="numero"
                               value="{{ $paciente->numero }}" required tabindex="15"
                               onkeypress="return isNumberKey(event)"/>
                    </div>
                    <div class="col">
                        Complemento:
                        <input class="form-control" readonly=“true” id="input15" placeholder="Complemento" type="text"
                               name="complemento"
                               value="{{ $paciente->complemento }}"
                               tabindex="16"/>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        Bairro: <br/>
                        <input class="form-control" readonly=“true” id="input16" placeholder="Bairro" type="text"
                               name="bairro"
                               value="{{ $paciente->bairro }}" required tabindex="17"/>
                    </div>
                    <div class="col">
                        Cidade: <br/>
                        <input class="form-control" readonly=“true” id="input17" placeholder="Cidade" type="text"
                               name="cidade"
                               value="{{ $paciente->cidade }}" required
                               tabindex="18"/>
                    </div>
                </div>
            </div>
            <div class="col">
                CEP: <br/>
                <input class="form-control col-md-6" readonly=“true” id="input18" placeholder="CEP" type="text"
                       name="cep"
                       value="{{ $paciente->cep }}" required
                       tabindex="19"
                       onkeypress="return isNumberKey(event)"/>
            </div></div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Disponibilidade:
                            <input class="form-control col-md-6" name="sexo" readonly=“true” id="input10" tabindex="10"
                                   value="{{ $paciente->sexo }}">
                        </div>
                        <div class="col">
                            Turno:
                            <input class="form-control col-md-6" readonly=“true” id="input11" name="estado_civil"
                                   value="{{ $paciente->estado_civil }}">
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
        <br/><br/>
        <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
            <a href="{{ url("/pacientes/editar/$paciente->id") }}" class="btn btn-outline-primary">Editar</a>
            <a href="{{ url("/pacientes")  }}" class="btn btn-outline-danger">Voltar</a>
            <a href="{{ route('home') }}" class="btn btn-outline-dark">Home</a>
        </div>
        <br/>
    </form>
    </div>
@endsection


