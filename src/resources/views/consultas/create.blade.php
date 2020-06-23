@extends('layout')

@section('cabecalho')
    Agendamento de Consulta
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

        @csrf

    </div>
    <div class="row">


        <form method="post" id="formconsulta" class="col">

            @csrf
            <div id="erro-box"></div>
              <br/>
            <a class="text-white">Paciente:</a>
            <div id="searchbox-paciente" class="autocompletegroup">
                <input type="hidden" name="idpaciente" id="idpaciente"/>
                <input class="form-control form-check-inline col-md-8 autocomplete" id="paciente"
                       autocomplete="paciente-novo" data-valid="false" data-erro-msg="Selecione pelo menos um paciente"
                       placeholder="Nome completo" type="text" data-type="chips" name="paciente"
                       data-url="consultas/retornop" tabindex="1"/>
            </div>
            <div class="row">
                <div class="col">
                    <br/>
                    <a class="text-white">Aluno:</a>
                    <div id="searchbox-aluno" class="autocompletegroup">
                        <input type="hidden" name="idaluno" id="idaluno"/>
                        <input class="form-control form-check-inline col-md-8 autocomplete" id="aluno"
                               autocomplete="off" data-valid="false" data-erro-msg="Selecione um aluno"
                               placeholder="Nome completo" type="text" data-type="autofill" name="aluno"
                               data-url="consultas/retornoa" size="50" tabindex="2" required
                               maxlength="250"/>


                    </div>
                    <div class="row">
                        <div class="col">
                            <br/>
                            <a class="text-white">Supervisor:</a>
                            <div id="searchbox-supervisor" class="autocompletegroup">
                                <input type="hidden" name="idsupervisor" id="idsupervisor"/>
                                <input class="form-control form-check-inline col-md-8 autocomplete" id="supervisor"
                                       placeholder="Nome completo" type="text" name="supervisor" size="50" tabindex="3"
                                       data-type="autofill" data-url="consultas/retornos" required data-valid="false"
                                       maxlength="250" data-erro-msg="Selecione um supervisor" autocomplete="offf"/>
                                <div id="returnbox-supervisor" class="autocompletebox">
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="text-white">Consultório:</a>
                                    <select class="form-control col-md-5" id="input11" name="consultorio"

                                            onchange="verifica(this.value)">
                                        <option value="1">Ludoterapia</option>
                                        <option value="2">Consultório 02</option>
                                        <option value="3">Consultório 03</option>
                                        <option value="4">Consultório 04</option>
                                        <option value="5">Consultório 05</option>
                                        <option value="6">Consultório 06</option>
                                        <option value="7">Consultório 07</option>
                                        <option value="8">Consultório 08</option>
                                        <option value="9">Consultório 09</option>
                                        required
                                    </select>
                                </div>

                                <div class=" col-md-3 col-xs-2 ">
                                    <div class="row">
                                        <div class="col-auto text-white">Dia da Consulta:&#160;</div>
                                        <div class="row">
                                            <a><b id="mostrardia" style="color:red;" value=""></b></a>
                                        </div>
                                    </div>
                                    <input class="form-control col" id="dia" type="date" min="1800-12-31"
                                           max="2999-12-31" name="dia" tabindex="4" required
                                            onkeydown="return false;"
                                           onchange="identificardata(), esconderconsultahora(), mostrardata()"/>
                                </div>
                                <div class="col" id="tardec">
                                    <div id="horactarde" class="text-white" hidden>Hora da Consulta:</div>
                                    <select class="form-control col-md-5" id="tardeca" name="hora" disabled hidden>
                                        {{--                                        onchange="verifica(this.value)">--}}
                                        <option value="13:00:00">13h</option>
                                        <option value="14:00:00">14h</option>
                                        <option value="15:00:00">15h</option>
                                        <option value="16:00:00">16h</option>
                                        <option value="17:00:00">17h</option>
                                        <option value="18:00:00">18h</option>
                                        <option value="19:00:00">19h</option>
                                        <option value="20:00:00">20h</option>

                                        required
                                    </select>
                                </div>
                                <div class="col" id="manhac">
                                    <div id="horacmanha" class="text-white" hidden>Hora da Consulta:</div>
                                    <select class="form-control col-md-5" id="manhaca" name="hora" disabled hidden>
                                        {{--onchange="verifica(this.value)"--}}
                                        <option value="08:00:00">08h</option>
                                        <option value="09:00:00">09h</option>
                                        <option value="10:00:00">10h</option>
                                        <option value="11:00:00">11h</option>

                                        required
                                    </select>
                                </div>
                                <div class="col"><br/>
                                    <input class="form-control col" id="output" placeholder="Dia da semana" type="text"
                                           value="" disabled hidden>

                                </div>

                            </div>


                            <br/><br/>
                            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                                <button class="btn btn-success text-white" type="submit">Adicionar</button>
                                <a href="{{ url("/consultas") }}" class="btn btn-danger text-white">Voltar</a>
                                <a href="{{ url("/") }}" class="btn btn-primary text-white">Home</a>

                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection





