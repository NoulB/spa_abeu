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
                <a class="text-white">Nome:</a>
                <input class="form-control " readonly=“true” id="input1" placeholder="Nome completo"
                       value="{{ $paciente->nome }}" type="text" name="nome" tabindex="1" required autofocus/>
            </div>


            <div class="col">
                <div class="row">
                    <div class="col">

                        <br/>
                        <a class="text-white">Data de Inscrição do Paciente:</a>
                        <input class="form-control col-md-7" readonly=“true” id="createate" type="datetime"
                               name="Data do Cadastro do Paciente" tabindex="19" onkeypress="return isNumberKey(event)"
                               value="{{\Carbon\Carbon::parse($paciente->createate)->format('d/m/Y')}}" required/>
                    </div>


                    <div class="col">
                        <br/><br/>
                        <a href="{{ url("/pacientes/remover/$paciente->id") }}" class="btn btn-warning text-white"
                           onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir Paciente</a>
                    </div>
                </div>
            </div>
        </div>


            <div class="row">
                <div class="col">
                    <a class="text-white">CPF:</a>>
                    <input class="form-control" readonly=“true” id="input2" placeholder="somente números" type="text"
                           name="cpf"
                           value="{{ $paciente->cpf }}" tabindex="2"
                           onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col">
                    <a class="text-white">RG: </a>
                    <input class="form-control" readonly=“true” id="input3" placeholder="somente números"
                           value="{{ $paciente->rg }}" type="text"
                           name="rg" tabindex="3"
                           onkeypress="return isNumberKey(event)" required/>
                </div>
                <div class="col">
                    <a class="text-white"> Data de Nascimento:</a>
                    <input class="form-control col-md-11" readonly=“true” id="input4" type="date" name="data_nascimento"
                           value="{{ $paciente->data_nascimento }}" tabindex="4" required/>
                </div>
                <div class="col">
                    <a class="text-white"> Idade:</a>
                    <input class="form-control col-md-7" type="num" name="idade" id="idade" class="form-control"
                           placeholder="Idade" readonly=“true”
                           value="{{\Carbon\Carbon::parse($paciente->data_nascimento)->age}}"
                           required/>
                </div>

            </div>
            <div>
                <div class="row">
                    <div class="col">
                        <a class="text-white"> E-mail: </a>
                        <input class="form-control" readonly=“true” id="input5" placeholder="E-mail" type="text"
                               name="email"
                               value="{{ $paciente->email }}" tabindex="6"/>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a class="text-white"> Celular:</a>
                                <input class="form-control col-md-11" readonly=“true” id="input6"
                                       placeholder="Celular - somente números" type="text"
                                       name="celular"
                                       value="{{ $paciente->celular }}"
                                       tabindex="7" onkeypress="return isNumberKey(event)"/>
                            </div>
                            <div class="col">
                                <div class="row">

                                    <div class="col">
                                        <a class="text-white">Telefone:</a>
                                        <input class="form-control col-md-7" readonly=“true” id="input7"
                                               placeholder="Telefone 2"
                                               type="text" name="telefone"
                                               value="{{ $paciente->telefone }}"
                                               tabindex="8"
                                               onkeypress="return isNumberKey(event)"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <div class="col">
                            <a class="text-white">Nome do Pai:</a>
                            <input class="form-control" readonly=“true” id="input8" placeholder="Nome do Pai"
                                   type="text"
                                   name="pai"
                                   value="{{ $paciente->pai }}" tabindex="9"/>
                        </div>
                        <div class="col">
                            <a class="text-white"> Nome do Mae:</a>
                            <input class="form-control" readonly=“true” id="input9" placeholder="Nome da Mãe"
                                   type="text"
                                   name="mae" value="{{ $paciente->mae }}" required tabindex="10"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a class="text-white">Sexo:</a>
                                <input class="form-control col-md-6" name="sexo" readonly=“true” id="input10"
                                       tabindex="10"
                                       value="{{ $paciente->sexo }}">
                            </div>
                            <div class="col">
                                <a class="text-white">Estado civil:</a>
                                <input class="form-control col-md-6" readonly=“true” id="input11" name="estado_civil"
                                       value="{{ $paciente->estado_civil }}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <a class="text-white">Cônjuge:</a>
                        <input class="form-control" readonly=“true” id="input12" placeholder="Não é casado..."
                               value="{{ $paciente->conjuge }}"
                               type="text" id="input" name="conjuge"/>
                    </div>
                </div>
                <div>

                </div>
                <br/>
                <div>
                    <h4 class="text-white">Endereço:</h4>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="text-white">Logradouro:</a>
                        <input class="form-control" readonly=“true” id="input13" placeholder="Logradouro" type="text"
                               name="logradouro"
                               value="{{ $paciente->logradouro }}" required tabindex="14"/>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a class="text-white"> Número:</a>
                                <input class="form-control col-md-6" readonly=“true” id="input14" placeholder="Numero"
                                       type="text" name="numero"
                                       value="{{ $paciente->numero }}" required tabindex="15"
                                       onkeypress="return isNumberKey(event)"/>
                            </div>
                            <div class="col">
                                <a class="text-white">Complemento:</a>
                                <input class="form-control" readonly=“true” id="input15" placeholder="Complemento"
                                       type="text"
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
                                <a class="text-white"> Bairro:</a>
                                <input class="form-control" readonly=“true” id="input16" placeholder="Bairro"
                                       type="text"
                                       name="bairro"
                                       value="{{ $paciente->bairro }}" required tabindex="17"/>
                            </div>
                            <div class="col">
                                <a class="text-white">Cidade:</a>
                                <input class="form-control" readonly=“true” id="input17" placeholder="Cidade"
                                       type="text"
                                       name="cidade"
                                       value="{{ $paciente->cidade }}" required
                                       tabindex="18"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <a class="text-white"> CEP:</a>
                        <input class="form-control col-md-6" readonly=“true” id="input18" placeholder="CEP" type="text"
                               name="cep"
                               value="{{ $paciente->cep }}" required
                               tabindex="19"
                               onkeypress="return isNumberKey(event)"/>
                    </div>
                </div>

            </div>
            <br/><br/>

            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">

                <a href="{{ url("/pacientes/editar/$paciente->id") }}" class="btn btn-success text-white">Editar</a>
                <a href="{{ url("/pacientes")  }}" class="btn btn-danger text-white">Voltar</a>
                <a href="{{ route('home') }}" class="btn btn-primary text-white">Home</a>
            </div>
            <br/>
    </form>



@endsection


