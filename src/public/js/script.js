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
    console.log(value);
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



