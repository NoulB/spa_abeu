@extends('layout')
<title>Cadastro de Paciente</title>
@section('cabecalho')
    Cadastro de Paciente
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
            <div class="row">
                <div class="col">
                    <br/>
                    Nome:<br/>
                    <input class="form-control" autocomplete="novo-nome" id="input1" placeholder="Nome completo"
                           type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
                </div>
                <div class="col">
                    <br/>
                    Data de Inscrição do Paciente: <br/>
                    <input class="form-control col-md-6" autocomplete="novo-data" id="created_at" type="date" name="created_at"
                           name="Data do Cadastro do Paciente"
                           onkeypress="return isNumberKey(event)"/>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" autocomplete="novo-cpf" id="inputcpf" placeholder="somente números" type="text" name="cpf"
                           tabindex="2"
                           onkeypress="return isNumberKey(event)" required maxlength="11" onblur="ValidaCPF()"
                           onclick="desvalidarCPF()"/>
                </div>
                <div class="col">
                    RG: <br/>
                    <input class="form-control" autocomplete="novo-rg" id="input2" placeholder="somente números" type="text"
                           name="rg" tabindex="3"
                           onkeypress="return isNumberKey(event)" required required maxlength="16"/>
                </div>
                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-11" autocomplete="novo-nasc" id="data_nasc" type="date" min="1800-12-31" max="2999-12-31"
                           name="data_nascimento"
                           tabindex="4" required/>
                </div>
                <div class="col">
                    Idade:<br/>
                    <input class="form-control col-md-7" autocomplete="novo-idade" type="num" name="idade" id="idade" class="form-control"
                           placeholder="Idade" disabled>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col">
                        E-mail: <br/>
                        <input class="form-control" autocomplete="novo-mail" id="input5" placeholder="E-mail" type="text" name="email"
                               tabindex="6" maxlength="64"/>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                Celular: <br/>
                                <input class="form-control col-md-11" autocomplete="novo-cel" id="inputcel"
                                       placeholder="Celular - somente números"
                                       type="text"
                                       name="celular"
                                       size="20" tabindex="7" onkeypress="return isNumberKey(event)" maxlength="11"
                                       OnBlur="ValidaCEL()" onclick="desvalidarCEL()"/>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        Telefone:<br/>
                                        <input class="form-control col-md-7" autocomplete="novo-tel" id="inputtel" placeholder="Telefone 2"
                                               type="text"
                                               name="telefone"
                                               size="20" tabindex="8"
                                               onkeypress="return isNumberKey(event)" maxlength="10"
                                               OnBlur="ValidaTEL()" onclick=" desvalidarTEL()"/>
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
                        Nome do Pai:<br/>
                        <input class="form-control" id="input8" autocomplete="novo-nome" placeholder="Nome do Pai" type="text" name="pai"
                               tabindex="9" maxlength="256"/>
                    </div>
                    <div class="col">
                        Nome do Mae:<br/>
                        <input class="form-control" autocomplete="novo-nome" id="input9" placeholder="Nome da Mãe" type="text" name="mae"
                               tabindex="10" maxlength="256"
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
                    <input class="form-control" autocomplete="novo-conj" id="input12" placeholder="Nome do(a) Cônjuge"
                           type="text" name="conjuge" maxlength="256"/>
                </div>
            </div>
            <div>

            </div>
            <br/>
            <h4>Endereço:</h4>
            <div class="row">
            <div class="col">
                CEP: <br/>
                <input class="form-control col-md-2" autocomplete="novo-" id="inputcep" placeholder="somente números" type="text"
                       name="cep"
                       size="20" required tabindex="19" onkeypress="return isNumberKey(event)" maxlength="8"
                       OnBlur="ValidaCEP()"onchange="pesquisacep(this.value)" onclick="desvalidarCEP()"/>
            </div></div>
            <div class="row">
                <div class="col">
                    Logradouro:<br/>
                    <input class="form-control" autocomplete="novo-" id="rua" placeholder="Logradouro" type="text" name="logradouro"
                           size="37" tabindex="14" maxlength="256" required/>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            Número:<br/>
                            <input class="form-control col-md-6" autocomplete="novo-" id="numeendereco" placeholder="Numero" type="text"
                                   name="numero"
                                   size="10" required tabindex="15" maxlength="8"
                                   onkeypress="return isNumberKey(event)"/>
                        </div>
                        <div class="col">
                            Complemento:
                            <input class="form-control" autocomplete="novo-" id="complemento" placeholder="Complemento" type="text"
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
                            <input class="form-control" autocomplete="novo-" id="bairro" placeholder="Bairro" type="text" name="bairro"
                                   size="27"
                                   required tabindex="17" maxlength="64"/>
                        </div>
                        <div class="col">
                            Cidade: <br/>
                            <input class="form-control" autocomplete="novo-" id="cidade" placeholder="Cidade" type="text" name="cidade"
                                   size="27" required tabindex="18" maxlength="64"/>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="disponibilidade">
                    </div>
                </div>
            </div>
            <br/>
            <h4>Disponibilidade:&nbsp;</h4>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline">
                        <a class="btn btn-primary btn-sm" id="totaldias" onclick="totalmarcarcheckboxdias()" >Total</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="segunda">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="segundadia" value="segunda">
                        <label class="form-check-label" for="segundadia">Segunda</label>
                    </div>
                    <div class="form-check form-check-inline" id="terca">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tercadia" value="terca">

                        <label class="form-check-label" for="tercadia">Terça</label>
                    </div>
                    <div class="form-check form-check-inline" id="quarta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="quartadia" value="quarta">

                        <label class="form-check-label" for="quartadia">Quarta</label>
                    </div>
                    <div class="form-check form-check-inline" id="quinta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="quintadia" value="quinta">
                        <label class="form-check-label" for="quintadia">Quinta</label>
                    </div>
                    <div class="form-check form-check-inline" id="sexta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="sextadia" value="sexta">
                        <label class="form-check-label" for="sextadia">Sexta</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="turnotarde">
                        <h6>Turnos:</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="tarde">
                        <a class="btn btn-primary btn-sm " name="Turno" id="checkboxtarde" onclick="tardemarcarcheckbox()">Tarde</a>
                    </div>
                </div>
                <div class="col" id="noite">
                    <a class="btn btn-success btn-sm" name="Turno" id="checkboxnoite"  onclick="noitemarcarcheckbox()">Noite</a>
                </div>
                <div class="col" id="sabado">
                    <a class="btn btn-warning btn-sm" name="sabado" id="checkboxsabado" value="sabado"
                       onclick="sabadomarcarcheckbox()">Sábado</a>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="13h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox13h" value="13h">
                        <label class="form-check-label" for="checkbox13h">13h</label>
                    </div>
                    <div class="form-check form-check-inline" id="14h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox14h"
                               value="14h">
                        <label class="form-check-label" for="checkbox14h">14h</label>
                    </div>
                    <div class="form-check form-check-inline" id="15h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox15h"
                               value="15h">
                        <label class="form-check-label" for="checkbox15h">15h</label>
                    </div>
                    <div class="form-check form-check-inline" id="16h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox16h"
                               value="16h">
                        <label class="form-check-label" for="checkbox16h">16h</label>
                    </div>
                    <div class="form-check form-check-inline" id="17h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox17h"
                               value="17h">
                        <label class="form-check-label" for="checkbox17h">17h</label>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="form-check form-check-inline" id="18h">
                            <input class="form-check-input" type="checkbox" name="horario" id="checkbox18h"
                                   value="18h">
                            <label class="form-check-label" for="checkbox18h">18h</label>
                        </div>
                        <div class="form-check form-check-inline" id="19h">
                            <input class="form-check-input" type="checkbox" name="horario" id="checkbox19h"
                                   value="19h">
                            <label class="form-check-label" for="checkbox19h">19h</label>
                        </div>
                        <div class="form-check form-check-inline" id="20h">
                            <input class="form-check-input" type="checkbox" name="horario" id="checkbox20h"
                                   value="20h">
                            <label class="form-check-label" for="checkbox20h">20h</label></div>

                    </div>
                </div>
                <div class="col">
                    <div class="form-check form-check-inline" id="08h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox08h"
                               value="08h">
                        <label class="form-check-label" for="checkbox08h">08h</label>
                    </div>
                    <div class="form-check form-check-inline" id="09h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox09h"
                               value="09h">
                        <label class="form-check-label" for="checkbox09h">09h</label>
                    </div>
                    <div class="form-check form-check-inline" id="10h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox10h"
                               value="10h">
                        <label class="form-check-label" for="checkbox10h">10h</label>
                    </div>
                    <div class="form-check form-check-inline" id="11h">
                        <input class="form-check-input" type="checkbox" name="horario" id="checkbox11h" onclick="t()"
                               value="11h">
                        <label class="form-check-label" for="checkbox11h">11h</label>
                    </div>

                </div>
            </div>
            {{--  <div class="col" >
                  <a class="btn btn-primary btn-sm" name="teste"  value="4" onclick="arrayhorario()" >horarios</a>
              </div>
              <div class="col" >
                  <a class="btn btn-primary btn-sm" name="teste"  value="4" onclick="arraydiponibilidade()" >disponibilidade</a>
              </div>
   --}}




            <br/><br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-success">Adicionar</button>
                <a href="{{ url("/pacientes") }}" class="btn btn-danger">Voltar</a>
                <a href="{{ url("/") }}" class="btn btn-primary">Home</a>
            </div>
            <br/>
        </form>
    </div>


@endsection





