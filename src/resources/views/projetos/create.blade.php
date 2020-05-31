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


        <form method="post" id="formconsulta" class="col">

            @csrf

            <div id="erro-box"></div>
            <br/>
            Nome do Projeto:<br/>
            <div class="row">
                <div class="col col-md-8">
                    <input class="form-control" autocomplete="novo-nome" id="input1" placeholder="Nome completo"
                           type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
                </div>
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
                            Dia:
                            <select class="form-control col-md-5" id="input11" name="consultorio"

                                    onchange="verifica(this.value)">
                                <option value="segunda">Segunda-feira</option>
                                <option value="terça">Terça-feira</option>
                                <option value="quarta">Quarta-feira</option>
                                <option value="quinta">Quinta-feira</option>
                                <option value="sexta">Sexta-feira</option>
                                <option value="sabado">Sábado</option>
                                required
                            </select>
                        </div>

                        <div class=" col-md-6 col-xs-2 ">
                            <div class="row">
                                <div class="col">
                                    <h6>Hora de início:</h6>

                                    <input class="form-control col" type="time" required/>
                                </div>
                                <div class="col">
                                    <h6>Hora de término:</h6>

                                    <input class="form-control col" type="time" required/>
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





