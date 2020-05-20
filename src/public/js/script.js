function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function verifica(value) {
    var input11 = document.getElementById("input11");

    if (value == 'Casado') {
        input12.hidden = false;
    } else if (value == 'Solteiro') {
        input12.hidden = true;
        input12.value = "";
    } else if (value == 'Viúvo') {
        input12.hidden = true;
        input12.value = "";
    } else if (value == 'Divorciado') {
        input12.hidden = true;
        input12.value = "";
    }
}


function verificarCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") return false;
    if (strCPF == "11111111111") return false;
    if (strCPF == "22222222222") return false;
    if (strCPF == "33333333333") return false;
    if (strCPF == "44444444444") return false;
    if (strCPF == "55555555555") return false;
    if (strCPF == "66666666666") return false;
    if (strCPF == "77777777777") return false;
    if (strCPF == "88888888888") return false;
    if (strCPF == "99999999999") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11))) return false;
    return true;

    var strCPF = "12345678909";
    alert(TestaCPF(strCPF));
}

function ValidaCPF() {
    var strCPF = document.getElementById('inputcpf').value;
    if (!verificarCPF(strCPF)) {
        alert("CPF inválido");
        var strCpf = document.getElementById('inputcpf').value = "";
        return;
    } else {
        var inputcpf = document.forms.form1.inputcpf.value;
        var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
        inputcpf = inputcpf.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        inputcpf = inputcpf.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        inputcpf = inputcpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos

        var valorValido = document.getElementById("inputcpf").value = inputcpf;
    }
}

function ValidaCEL() {
    var inputcel = document.forms.form1.inputcel.value;
    var celValido = /^(([0-9]{2}.[0-9]{5}.[0-9]{4}))$/;
    inputcel = inputcel.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    var valorValido = document.getElementById("inputcel").value = inputcel;
}

function ValidaTEL() {
    var inputtel = document.forms.form1.inputtel.value;
    var telValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputtel = inputtel.replace(/(\d{2})(\d{8})/, '($1) $2');
    var valorValido = document.getElementById("inputtel").value = inputtel;
}

function ValidaCEP() {
    var inputcep = document.forms.form1.inputcep.value;
    var cepValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputcep = inputcep.replace(/(\d{5})(\d{3})/, '$1-$2');
    var valorValido = document.getElementById("inputcep").value = inputcep;
}


document.getElementById("input4").addEventListener('change', function () {
    var data = new Date(this.value);
    if (isDate_(this.value) && data.getFullYear() > 1900)
        document.getElementById("idade").value = calculateAge(this.value);
});

function calculateAge(dobString) {
    var dob = new Date(dobString);
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var birthdayThisYear = new Date(currentYear, dob.getMonth(), dob.getDate());
    var age = currentYear - dob.getFullYear();
    if (birthdayThisYear > currentDate) {
        age--;
    }
    return age;
}

function calcular(data) {
    var data = document.form.nascimento.value;
    alert(data);
    var partes = data.split("/");
    var junta = partes[2] + "-" + partes[1] + "-" + partes[0];
    document.form.idade.value = (calculateAge(junta));
}

var isDate_ = function (input) {
    var status = false;
    if (!input || input.length <= 0) {
        status = false;
    } else {
        var result = new Date(input);
        if (result == 'Invalid Date') {
            status = false;
        } else {
            status = true;
        }
    }
    return status;
}


function teste(valuer) {
    var teste01 = document.getElementById("teste01");

    if (valuer == 'Casado') {
        input12.hidden = false;
    } else if (valuer == 'Solteiro') {
        input12.hidden = true;
        input12.value = "";
    } else if (valuer == 'Viúvo') {
        input12.hidden = true;
        input12.value = "";
    } else if (valuer == 'Divorciado') {
        input12.hidden = true;
        input12.value = "";
    }
};


//*************     SCRIPTS DE CONSULTA     ***************//

$(document).on("click", ".select-class", function (e) {
    const id = $(this).attr("data-id");
    const nome = $(this).text().trim();
    const type = $(this).attr("data-type");
    if (type == "autofill") {
        autofill(id, nome, $(this));
    } else if (type == "chips") {
        chips(id, nome, $(this));
    }
    $(this).closest(".autocompletebox").removeClass("visible");
});

function autofill(id, nome, element) {
    var input = element.closest(".autocompletegroup").find("input[type='text']");
    var hidden = element.closest(".autocompletegroup").find("input[type='hidden']");
    input.val(nome);
    hidden.val(id);
    input.attr("data-valid", true);
}

function chips(id, nome, element) {
    var input = element.closest(".autocompletegroup").find("input[type='text']");
    var hidden = element.closest(".autocompletegroup").find("input[type='hidden']");
    let list = [];
    var url = window.location.protocol + "//" + window.location.host + "/pacientes/show/" + id;
    input.val("");
    if (hidden.val() != "" && hidden.val() != undefined && hidden.val() != "[]") {
        list = JSON.parse(hidden.val());
    }
    if (!list.includes(id)) {
        list.push(id);
        let chiphtml = "<span class='chip'><a href='" + url + "' target='_blank'>" + nome + "</a><span class='closechip' data-id='" + id + "'>+</span></span>"
        element.closest(".autocompletegroup").find(".chipsbox").append(chiphtml);
    }
    hidden.val(JSON.stringify(list));
    input.attr("data-valid", true);
}

$(document).on("click", ".closechip", function (e) {
    var id = $(this).attr("data-id");
    var hidden = $(this).closest(".autocompletegroup").find("input[type='hidden']");
    var valid = $(this).closest(".autocompletegroup").find("input[type='text']");
    var array = JSON.parse(hidden.val());

    if (array.includes(id)) {
        const index = array.indexOf(id);
        array.splice(index, 1);
        $(this).closest(".chip").remove();
        hidden.val(JSON.stringify(array));
    }
    if (array == "" || array == null || array == []) {
        valid.attr("data-valid", false);
    }

});
$(function () {
    $(".autocomplete").each(function (index, e) {
        let name = $(this).attr("name");
        let type = $(this).attr("data-type");
        $(this).after("<div data-id='" + name + "' class='autocompletebox col-md-8'></div>")
        if (type == "chips") {
            $(this).after("<div data-id='" + name + "' class='chipsbox col-md-8'></div>")
        }
    })
})

function generateList(data, tabela, type) {
    let html = "";
    //Foreach no Javascript
    data.forEach(e => {
        html += "<div data-id=" + e.id + " data-type='" + type + "' class=\"select-class\">\n" +
            e.nome + "\n" +
            "</div>"
    })
    $(".autocompletebox[data-id='" + tabela + "']").html(html);
    $(".autocompletebox[data-id='" + tabela + "']").addClass("visible");
}

$(document).on("click", function (e) {
    console.log($("#idpaciente").val());
    if (!$(e.target).hasClass("select-class")) {
        $(".autocompletebox").html("");
        $(".autocompletebox").removeClass("visible");

    }
});

$(document).on("keyup", ".autocomplete", function (e) {
    let name = $(this).attr("name");
    let type = $(this).attr("data-type");
    var value = $(this).val();
    var url = window.location.protocol + "//" + window.location.host + "/" + $(this).attr("data-url");
    if (type == "autofill") {
        $(this).attr("data-valid", false);
    }
    if (value.length >= 3) {
        $.ajax({
            method: "GET",
            url: url + "/" + value,
            success: function (data) {
                if (data.length > 0) {
                    generateList(data, name, type);
                }
            },
            dataType: "json"
        });
    } else {
        $(".autocompletebox").html("");
        $(".autocompletebox").removeClass("visible");
    }
});

$(document).on("click", ".erro-box-close", function (e) {
    $("#erro-box").html("");
    $("#erro-box").removeClass("visible");

});
$(document).on("submit", "#formconsulta", function (e) {
    console.log($("#idpaciente").val());
    console.log($("#idaluno").val());
    console.log($("#idsupervisor").val());
    if ($("input[data-valid='false']").length > 0) {
        e.preventDefault();
        var msg = "";
        $("input[data-valid='false']").each(function (index, e) {
            msg += $(this).attr("data-erro-msg") + "</br>";
        });
        msg += "<div class='erro-box-close'>+</div>"
        $("#erro-box").html(msg);
        $("#erro-box").addClass("visible");
        return false;
    }
});

//**********************                     ************************//



