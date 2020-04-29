@extends('layout')

@section('cabecalho')
    Cadastro de Pacientes
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


        <form name="form1" method="post">
            @csrf
            <div>
                <br/>
                Nome:<br/>
                <input class="form-control col-md-6" id="input1" placeholder="Nome completo"
                       type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>

            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" id="inputcpf" placeholder="somente números" type="text" name="cpf"
                           tabindex="2"
                           onkeypress="return isNumberKey(event)" required maxlength="11" OnBlur="ValidaCPF()"/>
                </div>
                <div class="col">
                    RG: <br/>
                    <input class="form-control" id="input2" placeholder="somente números" type="text"
                           name="rg" tabindex="3"
                           onkeypress="return isNumberKey(event)"  required required maxlength="16"/>
                </div>
                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-8" id="input4" type="date" min="1800-12-31" max="2999-12-31" name="data_nascimento"
                           tabindex="4" required/>
                </div>
                <div class="col">
                    Idade:<br/>
                    <input class="form-control col-md-6" type="num" name="idade" id="idade" class="form-control" placeholder="Idade" disabled>
                </div>
            </div>
            <div>
                <div class="row">

                    <div class="col">
                        E-mail: <br/>
                        <input class="form-control" id="input5" placeholder="E-mail" type="text" name="email"
                               tabindex="6" maxlength="64"/>
                    </div>
                    <div class="col">
                        Celular: <br/>
                        <input class="form-control col-md-6" id="inputcel" placeholder="Celular - somente números"
                               type="text"
                               name="celular"
                               size="20" tabindex="7" onkeypress="return isNumberKey(event)" maxlength="11" OnBlur="ValidaCEL()"/>
                    </div>
                    <div class="col">
                        Telefone:<br/>
                        <input class="form-control col-md-6" id="inputtel" placeholder="Telefone 2" type="text"
                               name="telefone"
                               size="20" tabindex="8"
                               onkeypress="return isNumberKey(event)" maxlength="11" OnBlur="ValidaTEL()"/>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        Nome do Pai:<br/>
                        <input class="form-control" id="input8" placeholder="Nome do Pai" type="text" name="pai"
                               tabindex="9" maxlength="256"/>
                    </div>
                    <div class="col">
                        Nome do Mae:<br/>
                        <input class="form-control" id="input9" placeholder="Nome da Mãe" type="text" name="mae" tabindex="10" maxlength="256"
                               required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Sexo:
                            <select class="form-control col-md-6" name="sexo" id="input10" tabindex="10">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                required
                            </select>
                        </div>
                        <div class="col">
                            Estado civil:
                            <select class="form-control col-md-6" id="input11" name="estado_civil"

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
                     Cônjuge:
                    <input class="form-control" id="input12" placeholder="Nome do(a) Cônjuge"
                           type="text" name="conjuge" maxlength="256"/>
                </div>
            </div>
            <div>

            </div>
            <br/>
            <h4>Endereço:</h4>
            <div class="row">
                <div class="col">
                    Logradouro:<br/>
                    <input class="form-control" id="input13" placeholder="Logradouro" type="text" name="logradouro"
                           size="37" tabindex="14" maxlength="256" required />
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Número:<br/>
                            <input class="form-control col-md-6" id="input14" placeholder="Numero" type="text"
                                   name="numero"
                                   size="10" required tabindex="15" maxlength="8"
                                   onkeypress="return isNumberKey(event)"/>
                        </div>
                        <div class="col">
                            Complemento:
                            <input class="form-control" id="input15" placeholder="Complemento" type="text"
                                   name="complemento"
                                   size="20" tabindex="16" maxlength="64"/>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Bairro: <br/>
                            <input class="form-control" id="input16" placeholder="Bairro" type="text" name="bairro"
                                   size="27"
                                   required tabindex="17" maxlength="64"/>
                        </div>
                        <div class="col">
                            Cidade: <br/>
                            <input class="form-control" id="input17" placeholder="Cidade" type="text" name="cidade"
                                   size="27" required tabindex="18"maxlength="64"/>
                        </div>
                    </div>
                </div>
                <div class="col">
                    CEP: <br/>
                    <input class="form-control col-md-6" id="inputcep" placeholder="somente números" type="text" name="cep"
                           size="20" required tabindex="19" onkeypress="return isNumberKey(event)" maxlength="8" OnBlur="ValidaCEP()"/>
                </div>
            </div>
            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-outline-primary">Adicionar</button>
                <a href="{{ url("/pacientes") }}" class="btn btn-outline-danger">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
            <br/>
        </form>
    </div>

@endsection

