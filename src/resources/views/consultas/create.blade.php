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
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
        //------      PACIENTES     ------//
                $(document).on("click", ".linha-retornop", function (e) {
                    var obj = $(this);
                    console.log(obj.attr("data-id"));
                    console.log(obj.text().trim());
                    $("#idpaciente").val(obj.attr("data-id"));
                    $("#paciente").val(obj.text().trim());
                    $("#returnbox-paciente").html("");
                    $("#returnbox-paciente").removeClass("visible");
                });
                $(document).on("keyup", "#paciente", function (e) {
                    var paciente = $("#paciente").val();
                    console.log(paciente);
                    if(paciente.length>=3) {
                        $.ajax({
                            method: "GET",
                            url: "{{ url('consultas/retornop') }}" + "/" + paciente,
                            success: function (data) {
                                if (data.length>0) {
                                    $("#returnbox-paciente").addClass("visible");
                                    $("#returnbox-paciente").html(data);
                                    // console.log("data: ", data);
                                }

                            },
                            dataType: "html"
                        });
                    }
                    else{
                        $("#returnbox-paciente").html("");
                        $("#returnbox-paciente").removeClass("visible");
                    }
                });

            </script>

            <script type="text/javascript">
            //------      ALUNOS     ------//
                $(document).on("click", ".linha-retornoa", function (e) {
                    var obj = $(this);
                    console.log(obj.attr("data-id"));
                    console.log(obj.text().trim());
                    $("#idaluno").val(obj.attr("data-id"));
                    $("#aluno").val(obj.text().trim());
                    $("#returnbox-aluno").html("");
                    $("#returnbox-aluno").removeClass("visible");
                });

                $(document).on("keyup", "#aluno", function (e) {
                    var aluno = $("#aluno").val();
                    console.log(aluno);
                    if(aluno.length>=3) {
                        $.ajax({
                            method: "GET",
                            url: "{{ url('consultas/retornoa') }}" + "/" + aluno,
                            success: function (data) {
                                if (data.length>0) {
                                    $("#returnbox-aluno").addClass("visible");
                                    $("#returnbox-aluno").html(data);
                                    // console.log("data: ", data);
                                }

                            },
                            dataType: "html"
                        });
                    }
                    else{
                        $("#returnbox-aluno").html("");
                        $("#returnbox-aluno").removeClass("visible");
                    }
                });

            </script>

            <script type="text/javascript">
        //------      SUPERVISORES     ------//
                $(document).on("click", ".linha-retornos", function (e) {
                    var obj = $(this);
                            console.log(obj.attr("data-id"));
                            console.log(obj.text().trim());
                    $("#idsupervisor").val(obj.attr("data-id"));
                    $("#supervisor").val(obj.text().trim());
                    $("#returnbox-supervisor").html("");
                    $("#returnbox-supervisor").removeClass("visible");
                });
                $(document).on("keyup", "#supervisor", function (e) {
                    var supervisor = $("#supervisor").val();
                    console.log(supervisor);
                    if(supervisor.length>=3) {
                        $.ajax({
                            method: "GET",
                            url: "{{ url('consultas/retornos') }}" + "/" + supervisor,
                            success: function (data) {
                                if (data.length>0) {
                                    $("#returnbox-supervisor").addClass("visible");
                                    $("#returnbox-supervisor").html(data);
                                    // console.log("data: ", data);
                                }

                            },
                            dataType: "html"
                        });
                    }
                    else{
                        $("#returnbox-supervisor").html("");
                        $("#returnbox-supervisor").removeClass("visible");
                    }
                });
            </script>
    </div>
    <div class="row">
        <form method="post" id="formconsulta" autocomplete="false" action="" class="col">
            <input type="hidden" id="idpaciente"/>
            <input type="hidden" id="idaluno"/>
            <input type="hidden" id="idsupervisor"/>
            <br/>
            Paciente:<br/>
            <div id="searchbox-paciente" class="autocompletegroup">
            <input class="form-control form-check-inline col-md-8" id="paciente" placeholder="Nome completo" type="text"
                   name="paciente" tabindex="1" autocomplete="false" required autofocus/>
            <div id="returnbox-paciente" class="autocompletebox">

            </div>
            </div>

    <div class="row">
        <div class="col">
            <br/>
            Aluno:<br/>
            <div id="searchbox-aluno" class="autocompletegroup">
            <input class="form-control form-check-inline col-md-8" id="aluno" placeholder="Nome completo" type="text"
                   name="aluno" size="50" tabindex="2" autocomplete="no" required autofocus maxlength="250" />
            <div id="returnbox-aluno" class="autocompletebox">

        </div>
    </div>
    <div class="row">
        <div class="col">
            <br/>
            Supervisor:<br/>
            <div id="searchbox-supervisor" class="autocompletegroup">
            <input class="form-control form-check-inline col-md-8" id="supervisor" placeholder="Nome completo"
                   type="text" name="supervisor" size="50" tabindex="3" autocomplete="no" required autofocus maxlength="250"/>
            <div id="returnbox-supervisor" class="autocompletebox">

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
        <button class="btn btn-success" type="submit">Adicionar</button>
        <a href="{{ url("/consultas") }}" class="btn btn-danger">Voltar</a>
        <a href="{{ url("/") }}" class="btn btn-primary">Home</a>

    </div>
    <br/>
    </form>
    </div>

@endsection



