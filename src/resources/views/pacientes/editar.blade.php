@extends('layout')
<title>Editar Paciente</title>
@section('cabecalho')
    Editar Paciente
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


        <form name="form1" action="{{ url("/pacientes/update/") }}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $paciente->id }}">


            <div class="row">
                <div class="col">
                    <br/>
                    <a class="text-white">Nome:</a>
                    <input class="form-control" autocomplete="novo-" id="input1" placeholder="Nome completo"
                           type="text" name="nome" value="{{ $paciente->nome }}" size="50" tabindex="1" required
                           autofocus maxlength="250"/>
                </div>
                <div class="col">
                    <br/>
                    <a class="text-white">Data de Inscrição do Paciente:</a>
                    <input class="form-control col-md-5" readonly=“true” id="createate" type="datetime"
                           name="Data do Cadastro do Paciente"
                           value="{{\Carbon\Carbon::parse($paciente->createate)->format('d/m/Y')}}" required
                           tabindex="19"
                           onkeypress="return isNumberKey(event)"/>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a class="text-white">CPF:</a>
                    <input class="form-control" autocomplete="novo-" readonly=“true” id="inputcpf"
                           placeholder="somente números" type="text" name="cpf"
                           value="{{ $paciente->cpf }}" tabindex="2" onkeypress="return isNumberKey(event)" required
                           required maxlength="11"/>
                </div>
                <div class="col">
                    <a class="text-white">RG: </a>
                    <input class="form-control" autocomplete="novo-" id="input3" placeholder="somente números"
                           type="text"
                           name="rg" value="{{ $paciente->rg }}" tabindex="3" onkeypress="return isNumberKey(event)"
                           size="20" maxlength="16" required/>
                </div>
                <div class="col">
                    <a class="text-white"> Data de Nascimento:</a>
                    <input class="form-control col-md-11" autocomplete="novo-" id="input4" type="date" min="1800-12-31"
                           max="2999-12-31" name="data_nascimento"
                           value="{{ $paciente->data_nascimento }}" tabindex="4" required/>
                </div>
                <div class="col">
                    <a class="text-white"> Idade:</a>
                    <input class="form-control col-md-7" autocomplete="novo-" type="num" name="idade" id="idade"
                           class="form-control" placeholder="Idade" disabled
                           value="{{\Carbon\Carbon::parse($paciente->data_nascimento)->age}}">
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="col">
                        <a class="text-white"> E-mail: </a>
                        <input class="form-control" autocomplete="novo-" size="10" id="input5" placeholder="E-mail"
                               type="text" name="email"
                               value="{{ $paciente->email }}" tabindex="6" maxlength="64"/>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <a class="text-white"> Celular:</a>
                                <input class="form-control col-md-11" autocomplete="novo-" id="inputcel"
                                       placeholder="Somente números"
                                       type="text" name="celular" value="{{ $paciente->celular }}" required
                                       maxlength="11" OnBlur="ValidaCEL()"
                                       size="20" tabindex="7" onkeypress="return isNumberKey(event)"
                                       onclick="desvalidarCEL()"/>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <a class="text-white">Telefone:</a>
                                        <input class="form-control col-md-7" autocomplete="novo-" id="inputtel"
                                               placeholder="Telefone" type="text"
                                               name="telefone" value="{{ $paciente->telefone }}"
                                               size="20" tabindex="8"
                                               onkeypress="return isNumberKey(event)" required maxlength="10"
                                               OnBlur="ValidaTEL()" onclick="desvalidarTEL()"/>
                                    </div>
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
                        <input class="form-control" autocomplete="novo-" id="input8" placeholder="Nome do Pai"
                               type="text" name="pai"
                               value="{{ $paciente->pai }}"
                               tabindex="9" maxlength="256"/>
                    </div>
                    <div class="col">
                        <a class="text-white"> Nome do Mae:</a>
                        <input class="form-control" autocomplete="novo-" id="input9" placeholder="Nome da Mãe"
                               type="text" name="mae"
                               value="{{ $paciente->mae }}"
                               required
                               tabindex="10" maxlength="256"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <a class="text-white">Sexo:</a>
                            <select class="form-control col-md-6" name="sexo" onfocus="disableFirstItemOnly(this);"
                                    id="input10" tabindex="10">

                                <option selected value="{{$paciente->sexo}}"> {{ $paciente->sexo }} </option>
                                <script type="text/javascript">
                                    function disableFirstItemOnly(ddl) {
                                        ddl.options[0].hidden = true;
                                    }
                                </script>
                                <option onclick="Masculino"> Masculino</option>
                                <option onclick="Feminino">Feminino</option>

                            </select>
                        </div>
                        <div class="col">
                            <a class="text-white">Estado civil:</a>
                            <select class="form-control col-md-6" id="input11" name="estado_civil"
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
                <div class="col" id="i12" hidden>
                    <a class="text-white">Cônjuge:</a>
                    <input class="form-control" autocomplete="novo-" id="input12" placeholder="Nome do(a) Cônjuge"
                           type="text" id="input12" name="conjuge" value="{{ $paciente->conjuge }}" maxlength="256"/>
                </div>
            </div>
            <div>

            </div>
            <br/>
            <h4 class="text-white">Endereço:</h4>
            <div class="row">
                <div class="col">
                    <a class="text-white">Logradouro:</a>
                    <input class="form-control" autocomplete="novo-" id="rua" placeholder="Logradouro" type="text" name="logradouro"
                           value="{{ $paciente->logradouro }}"
                           size="37" required tabindex="14" maxlength="256"/>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <a class="text-white"> Número:</a>
                            <input class="form-control col-md-6" autocomplete="novo-" id="numeendereco" placeholder="Numero" type="text"
                                   name="numero" value="{{ $paciente->numero }}"
                                   size="10" required tabindex="15"
                                   onkeypress="return isNumberKey(event)" maxlength="8"/>
                        </div>
                        <div class="col">
                            <a class="text-white">Complemento:</a>
                            <input class="form-control" autocomplete="novo-" id="complemento" placeholder="Complemento"
                                   type="text"
                                   name="complemento" value="{{ $paciente->complemento }}"
                                   size="20" tabindex="16" maxlength="64"/>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <a class="text-white"> Bairro:</a>
                            <input class="form-control" autocomplete="novo-" id="bairro" placeholder="Bairro"
                                   type="text" name="bairro"
                                   value="{{ $paciente->bairro }}" size="27" required tabindex="17" maxlength="64"/>
                        </div>
                        <div class="col">
                            <a class="text-white">Cidade:</a>
                            <input class="form-control" autocomplete="novo-" id="cidade" placeholder="Cidade"
                                   type="text" name="cidade"
                                   value="{{ $paciente->cidade }}" size="27" required tabindex="18" maxlength="64"/>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <a class="text-white"> CEP:</a>
                    <input class="form-control col-md-6" autocomplete="novo-" id="inputcep" placeholder="CEP"
                           type="text" name="cep"
                           value="{{ $paciente->cep }}"
                           size="20" required tabindex="19" onkeypress="return isNumberKey(event)" maxlength="8"
                           OnBlur="ValidaCEP()"onchange="pesquisacep(this.value)" onclick="desvalidarCEP()"/>
                </div>
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-success text-white">Salvar</button>
                <a href="{{ route('listar_pacientes') }}" class="btn btn-danger text-white">Voltar</a>
                <a href="{{ route('home') }}" class="btn btn-primary text-white">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection
