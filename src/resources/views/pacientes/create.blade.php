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
                    <input class="form-control " id="input1" placeholder="Nome completo"
                           type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
                </div>
                <div class="col">
                    <br/>
                    Data de Inscrição do Paciente: <br/>
                    <input class="form-control col-md-6" id="created_at" type="date" name="created_at"
                           name="Data do Cadastro do Paciente"
                           onkeypress="return isNumberKey(event)"/>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    CPF: <br/>
                    <input class="form-control" id="inputcpf" placeholder="somente números" type="text" name="cpf"
                           tabindex="2"
                           onkeypress="return isNumberKey(event)" required maxlength="11" onblur="ValidaCPF()"
                           onclick="desvalidarCPF()"/>
                </div>
                <div class="col">
                    RG: <br/>
                    <input class="form-control" id="input2" placeholder="somente números" type="text"
                           name="rg" tabindex="3"
                           onkeypress="return isNumberKey(event)" required required maxlength="16"/>
                </div>
                <div class="col">
                    Data de Nascimento:<br/>
                    <input class="form-control col-md-11" id="input4" type="date" min="1800-12-31" max="2999-12-31"
                           name="data_nascimento"
                           tabindex="4" required/>
                </div>
                <div class="col">
                    Idade:<br/>
                    <input class="form-control col-md-7" type="num" name="idade" id="idade" class="form-control"
                           placeholder="Idade" disabled>
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
                        <div class="row">
                            <div class="col">
                                Celular: <br/>
                                <input class="form-control col-md-11" id="inputcel"
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
                                        <input class="form-control col-md-7" id="inputtel" placeholder="Telefone 2"
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
                        <input class="form-control" id="input8" placeholder="Nome do Pai" type="text" name="pai"
                               tabindex="9" maxlength="256"/>
                    </div>
                    <div class="col">
                        Nome do Mae:<br/>
                        <input class="form-control" id="input9" placeholder="Nome da Mãe" type="text" name="mae"
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
                           size="37" tabindex="14" maxlength="256" required/>
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
                                   size="27" required tabindex="18" maxlength="64"/>
                        </div>
                    </div>
                </div>
                <div class="col">
                    CEP: <br/>
                    <input class="form-control col-md-6" id="inputcep" placeholder="somente números" type="text"
                           name="cep"
                           size="20" required tabindex="19" onkeypress="return isNumberKey(event)" maxlength="8"
                           OnBlur="ValidaCEP()" onclick="desvalidarCEP()"/>
                </div>
            </div>
          {{--  <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="disponibilidade">
                        <h6>Disponibilidade:</h6>
                    </div></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="total">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="Total1" value="1d"
                               onclick="totaldias()">
                        <label class="form-check-label" for="Total1">Total de Dias</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="turnototal">
                        <h6>Turno:</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="total2">
                        <input class="form-check-input" type="checkbox" name="Turno" id="Total22"
                               value="1t" onclick="totalturno()">
                        <label class="form-check-label" for="Total22">Total de Turnos</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="disponibilidade26">
                        <h6>Disponibilidade:</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="segunda">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo2" value="2"
                               onclick="segundaoculta()">
                        <label class="form-check-label" for="tipo2">Segunda</label>
                    </div>
                    <div class="form-check form-check-inline" id="terca">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo3"
                               onclick="tercaoculta()">
                        <label class="form-check-label" for="tipo3">Terça</label>
                    </div>
                    <div class="form-check form-check-inline" id="quarta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo4"
                               onclick="quartaoculta()">
                        <label class="form-check-label" for="tipo4">Quarta</label>
                    </div>
                    <div class="form-check form-check-inline" id="quinta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo5"
                               onclick="quintaoculta()">
                        <label class="form-check-label" for="tipo5">Quinta</label>
                    </div>
                    <div class="form-check form-check-inline" id="sexta">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo6" value="6"
                               onclick="sextaoculta()">
                        <label class="form-check-label" for="tipo6">Sexta</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="turnotarde">
                        <h6>Turno:</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="tarde">
                        <input class="form-check-input" type="checkbox" name="Turno" id="tipotarde"
                               value="3" onclick="tardeoculta()">
                        <label class="form-check-label" for="tipotarde">Tarde:</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="horariotarde" hidden>
                        <h6>Horários:</h6>
                    </div>
                    <div class="form-check form-check-inline" id="13h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo13h"
                               value="13">
                        <label class="form-check-label" for="tipo13h">13h</label>
                    </div>
                    <div class="form-check form-check-inline" id="14h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo14h"
                               value="14">
                        <label class="form-check-label" for="tipo14h">14h</label>
                    </div>
                    <div class="form-check form-check-inline" id="15h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo15h"
                               value="15">
                        <label class="form-check-label" for="tipo15h">15h</label>
                    </div>
                    <div class="form-check form-check-inline" id="16h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo16h"
                               value="16">
                        <label class="form-check-label" for="tipo16h">16h</label>
                    </div>
                    <div class="form-check form-check-inline" id="17h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo17h"
                               value="17">
                        <label class="form-check-label" for="tipo17h">17h</label>
                    </div></div></div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="turnonoite">
                        <h6>Turno:</h6></div></div></div>
            <div class="form-check form-check-inline" id="noite">
                <input class="form-check-input" type="checkbox" name="Turno" id="tiponoite"
                       value="4" onclick="noiteoculta()">
                <label class="form-check-label" for="tiponoite">Noite:</label>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="horarionoite" hidden>
                        <h6>Horários:</h6></div></div></div>
            <div class="row">
                <div class="col">
                    <div>
                        <div class="form-check form-check-inline" id="18h" hidden>
                            <input class="form-check-input" type="checkbox" name="horario" id="tipo18h"
                                   value="18">
                            <label class="form-check-label" for="tipo18h">18h</label>
                        </div>
                        <div class="form-check form-check-inline" id="19h" hidden>
                            <input class="form-check-input" type="checkbox" name="horario" id="tipo19h"
                                   value="19">
                            <label class="form-check-label" for="tipo19h">19h</label>
                        </div>
                        <div class="form-check form-check-inline" id="20h" hidden>
                            <input class="form-check-input" type="checkbox" name="horario" id="tipo20h"
                                   value="20">
                            <label class="form-check-label" for="tipo20h">20h</label></div>
                    </div></div></div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="disponibilidade7">
                        <h6>Disponibilidade:</h6></div></div></div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="sabado">
                        <input class="form-check-input" type="checkbox" name="disponibilidade" id="tipo7" value="7"
                               onclick="sabadooculta()">
                        <label class="form-check-label" for="tipo7">Sábado:</label>
                    </div>
                </div></div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="turnomanha">
                        <h6>Turno:</h6></div></div></div>
            <div class="form-check form-check-inline" id="manha">
                <input class="form-check-input" type="checkbox" name="Turno" id="tipomanha"
                       value="2" onclick="manhaoculta()">
                <label class="form-check-label" for="tipomanha">Manhã:</label>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="horariomanha" hidden>
                        <h6>Horários:</h6>
                    </div></div></div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-check-inline" id="08h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo08h"
                               value="08">
                        <label class="form-check-label" for="tipo08h">08h</label>
                    </div>
                    <div class="form-check form-check-inline" id="09h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo09h"
                               value="09">
                        <label class="form-check-label" for="tipo09h">09h</label>
                    </div>
                    <div class="form-check form-check-inline" id="10h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo10h"
                               value="10">
                        <label class="form-check-label" for="tipo10h">10h</label>
                    </div>
                    <div class="form-check form-check-inline" id="11h" hidden>
                        <input class="form-check-input" type="checkbox" name="horario" id="tipo11h"
                               value="11">
                        <label class="form-check-label" for="tipo11h">11h</label>
                    </div>
                </div>

            </div>--}}


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



