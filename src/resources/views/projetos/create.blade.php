@extends('layout')
<title>Cadastro de Projeto</title>
@section('cabecalho')
    Cadastro de Projeto
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

        <form method="post" id="formconsulta" class="col">
            @csrf

            Período:<br/>
            <div class="row">
                <div class="col col-md-2">
                    <input class="form-control" placeholder="Ano" value="{{$ano->format('Y')}}" type="text" required
                           autofocus onkeypress="return isNumberKey(event)" maxlength="4" name="ano"/>
                </div>
                <div class="col col-md-2">

                    <select class="form-control" id="semestre" name="semestre" onchange="verifica(this.value)">
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>
                        required
                    </select>
                </div>
                <div class="col col-md-2">
                    <select class="form-control" id="area_de_estagio" name="area_de_estagio" onchange="verifica(this.value)">
                        <option value="clinico">Clínico</option>
                        <option value="comunitario">Comunitário</option>
                        required
                    </select>
                </div>
            </div>
            <br/>
            Nome do Projeto:<br/>
            <div class="row">
                <div class="col col-md-8">
                    <input class="form-control" placeholder="Nome do Projeto"
                           type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <br/>
                    Supervisor:<br/>
                    <div id="searchbox-supervisor" class="autocompletegroup">
                        <input type="hidden" name="supervisor_id" id="idsupervisor"/>
                        <input class="form-control form-check-inline col-md-8 autocomplete" id="supervisor"
                               placeholder="  Nome completo" type="text" name="supervisor" size="50" tabindex="3"
                               data-type="autofill" data-url="consultas/retornos" required data-valid="false"
                               maxlength="250" data-erro-msg="Selecione um supervisor" autocomplete="offf"/>
                        <div id="returnbox-supervisor" class="autocompletebox">
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col">
                            Dia:
                            <select class="form-control col-md-2" id="output" name="dia_da_semana"
                                    onchange="verifica(this.value)" onclick="esconderconsultahora2()">
                                <option value="segunda">Segunda-feira</option>
                                <option value="terça">Terça-feira</option>
                                <option value="quarta">Quarta-feira</option>
                                <option value="quinta">Quinta-feira</option>
                                <option value="sexta">Sexta-feira</option>
                                <option value="sabado">Sábado</option>
                                required
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div>
                        <div class="row" id="manhac">
                            <div class="col" >
                                <h6 id="horacmanha" hidden>Hora de início:</h6>
                                <input class="form-control col col-md-2" id="manhaca" type="time" min="08:00" max="11:00" required name="hora_inicio"disabled hidden/>
                                <br>
                                <h6 id="horacmanhat" hidden>Hora de término:</h6>
                                <input class="form-control col col-md-2" id="manhacat" type="time" min="08:10" max="12:00"required name="hora_fim"disabled hidden/>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="row" id="tardec" >
                            <div class="col" >
                                <h6 id="horactarde" hidden>Hora de início:</h6>
                                <input class="form-control col col-md-2" id="tardeca" type="time" min="13:00" max="20:00" required name="hora_inicio"disabled hidden/>
                                <br>
                                <h6 id="horactardet" hidden>Hora de término:</h6>
                                <input class="form-control col col-md-2" id="tardecat" type="time" min="13:10" max="21:00"required name="hora_fim"disabled hidden/>
                            </div>

                        </div>
                    </div>

                    <br>
                    <div>
                        Quantidade de vagas:
                        <input class="form-control col-md-2" placeholder="somente números" type="text" name="vagas" id="testes"
                               onkeypress="return isNumberKey(event)" required maxlength="2"/>
                    </div>
                    <br/><br/>
                    <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                        <button class="btn btn-success" type="submit">Adicionar</button>
                        <a href="{{ url("/projetos") }}" class="btn btn-danger">Voltar</a>
                        <a href="{{ url("/") }}" class="btn btn-primary">Home</a>
                    </div>
                    <br/>
                </div>
            </div>
        </form>
    </div>


@endsection





