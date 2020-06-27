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
            <br/>
            <a class="text-white">Paciente(s):</a>
            <div id="searchbox-paciente-show" class="autocompletegroup">
                @foreach($pac as $p)

                    <span class="chip"><a href="{{ url("/pacientes/show/$p->id")}}" target="_blank"> {{ $p->nome }}</a> </span>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <br/>
                    <a class="text-white">Aluno:</a>
                    <div id="searchbox-aluno" class="autocompletegroup">
                        <input class="form-control form-check-inline col-md-8 autocomplete" id="aluno" readonly="true"
                               autocomplete="off" data-valid="false"
                               type="text" data-type="autofill" name="aluno"
                               size="50" tabindex="2" value="{{ $aluno }}"
                               maxlength="250"/>
                    </div>
                    <div class="row">
                        <div class="col">
                            <br/>
                            <a class="text-white">Supervisor:</a>
                            <div id="searchbox-supervisor" class="autocompletegroup">
                                <input class="form-control form-check-inline col-md-8 autocomplete" id="supervisor"
                                       type="text" name="supervisor" size="50" tabindex="3"
                                       data-type="autofill"
                                       maxlength="250" readonly="true"
                                       value="{{ $supervisor }}"
                                       autocomplete="offf"/>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="text-white">Consultório:</a>
                                    <input class="form-control col-md-5" id="consultorio"
                                           value="{{ $consulta->consultorio }}" readonly="true" name="consultorio"
                                    >
                                </div>
                                <div class="col-md-12">

                                    <a class="text-white">Dia da Consulta:</a>
                                    <input class="form-control col-md-5" id="dia" type="date" readonly
                                           value="{{ $consulta->dia }}" name="dia"
                                           tabindex="4"/>
                                </div>
                                <div class="col-md-12">
                                    <a class="text-white">Hora da Consulta:</a>
                                    <input class="form-control col-md-5" id="hora" name="hora" readonly
                                           value="{{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}">
                                </div>
                            </div>
                            <br/><br/>
                            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                                <a href="{{ url("/") }}" class="btn btn-danger text-white">Voltar</a>
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



