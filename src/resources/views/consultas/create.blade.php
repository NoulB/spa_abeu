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
{{--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--        <script type="text/javascript">--}}
{{--            $(document).on("click", ".select-class", function (e) {--}}
{{--                const id = $(this).attr("data-id");--}}
{{--                const nome = $(this).text().trim();--}}
{{--                const type = $(this).attr("data-type");--}}
{{--                if (type == "autofill") {--}}
{{--                    autofill(id, nome, $(this));--}}
{{--                } else if (type == "chips") {--}}
{{--                    chips(id, nome, $(this));--}}
{{--                }--}}
{{--                $(this).closest(".autocompletebox").removeClass("visible");--}}
{{--            });--}}

{{--            function autofill(id, nome, element) {--}}
{{--                var input = element.closest(".autocompletegroup").find("input[type='text']");--}}
{{--                var hidden = element.closest(".autocompletegroup").find("input[type='hidden']");--}}
{{--                input.val(nome);--}}
{{--                hidden.val(id);--}}
{{--                input.attr("data-valid", true);--}}
{{--            }--}}

{{--            function chips(id, nome, element) {--}}
{{--                var input = element.closest(".autocompletegroup").find("input[type='text']");--}}
{{--                var hidden = element.closest(".autocompletegroup").find("input[type='hidden']");--}}
{{--                let list = [];--}}
{{--                var url = window.location.protocol + "//" + window.location.host + "/pacientes/show/" + id;--}}
{{--                input.val("");--}}
{{--                if (hidden.val() != "" && hidden.val() != undefined && hidden.val() != "[]") {--}}
{{--                    list = JSON.parse(hidden.val());--}}
{{--                }--}}
{{--                if (!list.includes(id)) {--}}
{{--                    list.push(id);--}}
{{--                    let chiphtml = "<span class='chip'><a href='" + url + "' target='_blank'>" + nome + "</a><span class='closechip' data-id='" + id + "'>+</span></span>"--}}
{{--                    element.closest(".autocompletegroup").find(".chipsbox").append(chiphtml);--}}
{{--                }--}}
{{--                hidden.val(JSON.stringify(list));--}}
{{--                input.attr("data-valid", true);--}}
{{--            }--}}

{{--            $(document).on("click", ".closechip", function (e) {--}}
{{--                var id = $(this).attr("data-id");--}}
{{--                var hidden = $(this).closest(".autocompletegroup").find("input[type='hidden']");--}}
{{--                var valid = $(this).closest(".autocompletegroup").find("input[type='text']");--}}
{{--                var array = JSON.parse(hidden.val());--}}

{{--                if (array.includes(id)) {--}}
{{--                    const index = array.indexOf(id);--}}
{{--                    array.splice(index, 1);--}}
{{--                    $(this).closest(".chip").remove();--}}
{{--                    hidden.val(JSON.stringify(array));--}}
{{--                }--}}
{{--                if (array == "" || array == null || array == []) {--}}
{{--                    valid.attr("data-valid", false);--}}
{{--                }--}}

{{--            });--}}
{{--            $(function () {--}}
{{--                $(".autocomplete").each(function (index, e) {--}}
{{--                    let name = $(this).attr("name");--}}
{{--                    let type = $(this).attr("data-type");--}}
{{--                    $(this).after("<div data-id='" + name + "' class='autocompletebox col-md-8'></div>")--}}
{{--                    if (type == "chips") {--}}
{{--                        $(this).after("<div data-id='" + name + "' class='chipsbox col-md-8'></div>")--}}
{{--                    }--}}
{{--                })--}}
{{--            })--}}

{{--            function generateList(data, tabela, type) {--}}
{{--                let html = "";--}}
{{--                //Foreach no Javascript--}}
{{--                data.forEach(e => {--}}
{{--                    html += "<div data-id=" + e.id + " data-type='" + type + "' class=\"select-class\">\n" +--}}
{{--                        e.nome + "\n" +--}}
{{--                        "</div>"--}}
{{--                })--}}
{{--                $(".autocompletebox[data-id='" + tabela + "']").html(html);--}}
{{--                $(".autocompletebox[data-id='" + tabela + "']").addClass("visible");--}}
{{--            }--}}

{{--            $(document).on("click", function (e) {--}}
{{--                console.log($("#idpaciente").val());--}}
{{--                if (!$(e.target).hasClass("select-class")) {--}}
{{--                    $(".autocompletebox").html("");--}}
{{--                    $(".autocompletebox").removeClass("visible");--}}

{{--                }--}}
{{--            });--}}

{{--            $(document).on("keyup", ".autocomplete", function (e) {--}}
{{--                let name = $(this).attr("name");--}}
{{--                let type = $(this).attr("data-type");--}}
{{--                var value = $(this).val();--}}
{{--                console.log(value);--}}
{{--                var url = window.location.protocol + "//" + window.location.host + "/" + $(this).attr("data-url");--}}
{{--                if (type == "autofill") {--}}
{{--                    $(this).attr("data-valid", false);--}}
{{--                }--}}
{{--                if (value.length >= 3) {--}}
{{--                    $.ajax({--}}
{{--                        method: "GET",--}}
{{--                        url: url + "/" + value,--}}
{{--                        success: function (data) {--}}
{{--                            if (data.length > 0) {--}}
{{--                                generateList(data, name, type);--}}
{{--                            }--}}
{{--                        },--}}
{{--                        dataType: "json"--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    $(".autocompletebox").html("");--}}
{{--                    $(".autocompletebox").removeClass("visible");--}}
{{--                }--}}
{{--            });--}}

{{--            $(document).on("click", ".erro-box-close", function (e) {--}}
{{--                $("#erro-box").html("");--}}
{{--                $("#erro-box").removeClass("visible");--}}

{{--            });--}}
{{--            $(document).on("submit", "#formconsulta", function (e) {--}}
{{--                console.log($("#idpaciente").val());--}}
{{--                console.log($("#idaluno").val());--}}
{{--                console.log($("#idsupervisor").val());--}}
{{--                if ($("input[data-valid='false']").length > 0) {--}}
{{--                    e.preventDefault();--}}
{{--                    var msg = "";--}}
{{--                    $("input[data-valid='false']").each(function (index, e) {--}}
{{--                        msg += $(this).attr("data-erro-msg") + "</br>";--}}
{{--                    });--}}
{{--                    msg += "<div class='erro-box-close'>+</div>"--}}
{{--                    $("#erro-box").html(msg);--}}
{{--                    $("#erro-box").addClass("visible");--}}
{{--                    return false;--}}
{{--                }--}}
{{--            });--}}
{{--        </script>--}}

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
                                    <select class="form-control col-md-5" id="consultorio" name="consultorio"
                                            onchange="verifica(this.value)"
                                    >
                                        <option value="Ludoterapia">Ludoterapia</option>
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
                                    <input class="form-control col-md-5" id="dia" type="date" min="1800-12-31"
                                           max="2999-12-31" name="dia"
                                           tabindex="4" required/>
                                </div>

                                <div class="col-md-12">
                                    Hora da Consulta:
                                    <select class="form-control col-md-5" id="hora" name="hora"

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



