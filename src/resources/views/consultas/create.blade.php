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
            {{--            ESTRUTURA BÁSICA        --}}
            {{--            <div class="autocompletegroup">--}}
            {{--                <input type="text" class="autocomplete" data-type="chips" name="penis" data-url="consultas/retornop">--}}
            {{--                <input type="hidden" id="pinto">--}}
            {{--            </div>--}}
            <br/>
            Paciente:<br/>
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
                    Aluno:<br/>
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
                            Supervisor:<br/>
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
                                    Consultório:
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
                                <div class="col-md-12">
                                    Dia da Consulta:<br/>
                                    <input class="form-control col-md-5" id="input4" type="date" min="1800-12-31"
                                           max="2999-12-31" name="dia"
                                           tabindex="4" required/>
                                </div>

                                <div class="col-md-12">
                                    Hora da Consulta:
                                    <select class="form-control col-md-5" id="input11" name="hora"

                                            onchange="verifica(this.value)">
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

                            </div>


                            <br/><br/>
                            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                                <button class="btn btn-success" type="submit">Adicionar</button>
                                <a href="{{ url("/consultas") }}" class="btn btn-danger">Voltar</a>
                                <a href="{{ url("/") }}" class="btn btn-primary">Home</a>

                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection



