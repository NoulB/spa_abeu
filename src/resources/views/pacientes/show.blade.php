@extends('layout')

@section('cabecalho')
    Paciente
@endsection

@section('conteudo')



    <form action="{{ url("/pacientes/show/") }}" method="post">
        @csrf
        <div>
            <br/>
            Nome:<br/>
            <input class="form-control col-md-6" readonly=“true” id="input1" placeholder="Nome completo" value="{{ $paciente->nome }}"
                   type="text" name="nome" size="50" tabindex="1" required autofocus/>

        </div>
        <div class="row">
            <div class="col">
                CPF: <br/>
                <input class="form-control" readonly=“true” id="input2" placeholder="somente números" type="text" name="cpf"
                       value="{{ $paciente->cpf }}" tabindex="2"
                       onkeypress="return isNumberKey(event)" required/>
            </div>
            <div class="col">
                RG: <br/>
                <input class="form-control" readonly=“true” id="input3" placeholder="somente números" value="{{ $paciente->rg }}" type="text"
                       name="rg" tabindex="3"
                       onkeypress="return isNumberKey(event)" required/>
            </div>
            <div class="col">
                Data de Nascimento:<br/>
                <input class="form-control col-md-6" readonly=“true” id="input4" type="date" name="data_nascimento"
                       value="{{ $paciente->data_nascimento }}" tabindex="4" required/>
            </div>
        </div>
        <div>
            <div class="row">

                <div class="col">
                    E-mail: <br/>
                    <input class="form-control" readonly=“true” id="input5" placeholder="E-mail" type="text" name="email"
                           value="{{ $paciente->email }}" tabindex="6"/>
                </div>
                <div class="col">
                    Celular: <br/>
                    <input class="form-control col-md-6" readonly=“true” id="input6" placeholder="Celular - somente números" type="text"
                           name="celular"
                           value="{{ $paciente->celular }}"
                           size="20" tabindex="7" onkeypress="return isNumberKey(event)"/>
                </div>
                <div class="col">
                    Telefone:<br/>
                    <input class="form-control col-md-6" readonly=“true” id="input7" placeholder="Telefone 2" type="text" name="telefone"
                           value="{{ $paciente->telefone }}"
                           size="20" tabindex="8"
                           onkeypress="return isNumberKey(event)"/>
                </div>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col">
                    Nome do Pai:<br/>
                    <input class="form-control" readonly=“true” id="input8" placeholder="Nome do Pai" type="text" name="pai"
                           value="{{ $paciente->pai }}" size="50"
                           tabindex="9"/>
                </div>
                <div class="col">
                    Nome do Mae:<br/>
                    <input class="form-control" readonly=“true” id="input9" placeholder="Nome da Mãe" type="text" name="mae"
                           value="{{ $paciente->mae }}" size="50" required
                           tabindex="10"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        Sexo:
                        <select class="form-control col-md-6" name="sexo" readonly=“true” id="input10" tabindex="10" value="{{ $paciente->sexo }}">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                            required
                        </select>
                    </div>
                    <div class="col">
                        Estado civil:
                        <select class="form-control col-md-6" readonly=“true” id="input11" name="estado_civil"
                                value="{{ $paciente->estado_civil }}"
                                onchange="verifica(this.value)">
                            <option value="Casado">Casado(a)</option>
                            <option value="Solteiro" selected>Solteiro(a)</option>
                            <option value="Divorciado">Divorciado(a)</option>
                            <option value="Viúvo">Viúvo(a)</option>
                            required
                        </select>
                    </div>
                </div>
            </div>
            <div class="col">
                Cônjuge:
                <input class="form-control" readonly=“true” id="input12" placeholder="Nome do(a) Cônjuge" value="{{ $paciente->conjuge }}"
                       type="text" id="input" name="conjuge"/>
            </div>
        </div>
        <div>

        </div>
        <br/>
        <h4>Endereço:</h4>
        <div class="row">
            <div class="col">
                Logradouro:<br/>
                <input class="form-control" readonly=“true” id="input13" placeholder="Logradouro" type="text" name="logradouro"
                       value="{{ $paciente->logradouro }}" size="37"
                       required tabindex="14"/>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        Número:<br/>
                        <input class="form-control col-md-6" readonly=“true” id="input14" placeholder="Numero" type="text" name="numero"
                               value="{{ $paciente->numero }}" size="10" required tabindex="15"
                               onkeypress="return isNumberKey(event)"/>
                    </div>
                    <div class="col">
                        Complemento:
                        <input class="form-control" readonly=“true” id="input15" placeholder="Complemento" type="text" name="complemento"
                               value="{{ $paciente->complemento }}"
                               size="20" tabindex="16"/>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        Bairro: <br/>
                        <input class="form-control" readonly=“true” id="input16" placeholder="Bairro" type="text" name="bairro"
                               value="{{ $paciente->bairro }}" size="27"
                               required tabindex="17"/>
                    </div>
                    <div class="col">
                        Cidade: <br/>
                        <input class="form-control" readonly=“true” id="input17" placeholder="Cidade" type="text" name="cidade"
                               value="{{ $paciente->cidade }}" size="27" required
                               tabindex="18"/>
                    </div>
                </div>
            </div>
            <div class="col">
                CEP: <br/>
                <input class="form-control col-md-6" readonly=“true” id="input18" placeholder="CEP" type="text" name="cep"
                       value="{{ $paciente->cep }}" size="20" required
                       tabindex="19"
                       onkeypress="return isNumberKey(event)"/>
            </div>
        </div>
        <br/>
        <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
            <button class="btn btn-outline-primary">Adicionar</button>
            <a href="{{ route('listar_pacientes')  }}" class="btn btn-outline-danger">voltar</a>
            <a href="{{ route('home') }}" class="btn btn-outline-dark">Home</a>
        </div>
        <br/>
    </form>
    </div>

@endsection
