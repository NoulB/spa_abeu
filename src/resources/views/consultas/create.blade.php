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
        <form method="post" id="paciente" action="" class="col">
            <br/>
            Paciente:<br/>
            <input class="form-control form-check-inline col-md-8" id="paciente" placeholder="Nome completo"
                   type="text" name="paciente" tabindex="1" required autofocus />

            <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            <button class="btn btn-success  my-2 my-sm-0" type="submit"><i class="fas fa-plus"></i></button>
        </form>
    </div>
    <div class="row">
        <div class="col">
            <br/>
            Aluno:<br/>
            <input class="form-control form-check-inline col-md-8" id="input1" placeholder="Nome completo"
                   type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
            <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <br/>
            Supervisor:<br/>
            <input class="form-control form-check-inline col-md-8" id="input1" placeholder="Nome completo"
                   type="text" name="nome" size="50" tabindex="1" required autofocus maxlength="250"/>
            <button class="btn btn-primary  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col">
            Consultório:
            <select class="form-control col-md-6" id="input11" name="consultório"

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
        <div class="col">
            Dia da Consulta:<br/>
            <input class="form-control col-md-11" id="input4" type="date" min="1800-12-31" max="2999-12-31" name="data_nascimento"
                   tabindex="4" required/>
        </div>

        <div class="col">
            Hora da Consulta:
            <select class="form-control col-md-6" id="input11" name="hora"

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
        <button class="btn btn-success">Adicionar</button>
        <a href="{{ url("/pacientes") }}" class="btn btn-secondary">Voltar</a>

    </div>
    <br/>
    </form>
    </div>

@endsection



