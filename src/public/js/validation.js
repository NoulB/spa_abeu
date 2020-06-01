function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function verifica(value) {
    var input11 = document.getElementById("input11");

    if (value == 'Casado') {
        i12.hidden = false;
    } else if (value == 'Solteiro') {
        i12.hidden = true;
        input12.value = "";
    } else if (value == 'Viúvo') {
        i12.hidden = true;
        input12.value = "";
    } else if (value == 'Divorciado') {
        i12.hidden = true;
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

function desvalidarCPF() {
    var inputcpf = document.forms.form1.inputcpf.value;
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
    inputcpf = inputcpf.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    inputcpf = inputcpf.replace(/(\d{3})(\d)/, "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    inputcpf = inputcpf.replace(".", "");
    inputcpf = inputcpf.replace(".", "");
    inputcpf = inputcpf.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos
    inputcpf = inputcpf.replace("-", "");

    var valorValido = document.getElementById("inputcpf").value = inputcpf;
}

function ValidaCEL() {
    var inputcel = document.forms.form1.inputcel.value;
    var celValido = /^(([0-9]{2}.[0-9]{5}.[0-9]{4}))$/;
    inputcel = inputcel.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    var valorValido = document.getElementById("inputcel").value = inputcel;
}

function desvalidarCEL() {
    var inputcel = document.forms.form1.inputcel.value;
    var celValido = /^(([0-9]{2}.[0-9]{5}.[0-9]{4}))$/;
    inputcel = inputcel.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    inputcel = inputcel.replace("(", "");
    inputcel = inputcel.replace(")", "");
    inputcel = inputcel.replace("-", "");
    inputcel = inputcel.replace(" ", "");

    var valorValido = document.getElementById("inputcel").value = inputcel;
}

function ValidaTEL() {
    var inputtel = document.forms.form1.inputtel.value;
    var telValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputtel = inputtel.replace(/(\d{2})(\d{8})/, '($1) $2');
    var valorValido = document.getElementById("inputtel").value = inputtel;
}

function desvalidarTEL() {
    var inputtel = document.forms.form1.inputtel.value;
    var telValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputtel = inputtel.replace(/(\d{2})(\d{8})/, '($1) $2');
    inputtel = inputtel.replace("(", "");
    inputtel = inputtel.replace(")", "");
    inputtel = inputtel.replace(" ", "");


    var valorValido = document.getElementById("inputtel").value = inputtel;
}

function ValidaCEP() {
    var inputcep = document.forms.form1.inputcep.value;
    var cepValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputcep = inputcep.replace(/(\d{5})(\d{3})/, '$1-$2');
    var valorValido = document.getElementById("inputcep").value = inputcep;
}

function desvalidarCEP() {
    var inputcep = document.forms.form1.inputcep.value;
    var cepValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputcep = inputcep.replace(/(\d{5})(\d{3})/, '$1-$2');
    inputcep = inputcep.replace("-", "");
    var valorValido = document.getElementById("inputcep").value = inputcep;
}


$(document).on("change", "#data_nasc", function (e) {
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


};

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

function totalmarcarcheckboxdias() {
    var checkBox = document.getElementById("totaldias");

    document.getElementById("segundadia").checked = true;
    document.getElementById("tercadia").checked = true;
    document.getElementById("quartadia").checked = true;
    document.getElementById("quintadia").checked = true;
    document.getElementById("sextadia").checked = true;
    document.getElementById("checkboxsabado").checked = true;


}
function tardemarcarcheckbox() {
    var checkBox = document.getElementById("checkboxtarde");
    document.getElementById("checkbox13h").checked = true;
    document.getElementById("checkbox14h").checked = true;
    document.getElementById("checkbox15h").checked = true;
    document.getElementById("checkbox16h").checked = true;
    document.getElementById("checkbox17h").checked = true;
}
function noitemarcarcheckbox() {
    var checkBox = document.getElementById("checkboxtarde");
    document.getElementById("checkbox18h").checked = true;
    document.getElementById("checkbox19h").checked = true;
    document.getElementById("checkbox20h").checked = true;

}
function sabadomarcarcheckbox() {
    var checkBox = document.getElementById("checkboxsabado");
    document.getElementById("checkbox08h").checked = true;
    document.getElementById("checkbox09h").checked = true;
    document.getElementById("checkbox10h").checked = true;
    document.getElementById("checkbox11h").checked = true;


}


function identificardata() {
    var input = document.getElementById("dia").value;
    var date = new Date(input).getUTCDay();

    var weekday = ['Domingo', 'Segunda', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-Feira', 'Sabado'];

    document.getElementById('output').value = weekday[date];
}


function esconderconsultahora()
{
    var dia = document.getElementById("output").value;

    var manhac= document.getElementById("manhac");
    var manhaca= document.getElementById("manhaca");
    var horacmanha= document.getElementById("horacmanha");
    var tardec = document.getElementById("tardec");
    var tardeca = document.getElementById("tardeca");
    var horactarde = document.getElementById("horactarde");

    if(document.getElementById("output").value == "Sabado")
    {

        manhac.hidden=false;
        manhaca.hidden=false;
        horacmanha.hidden=false;
        tardec.hidden=true;
        tardeca.hidden=true;
        horactarde.hidden=true;
        manhaca.disabled=false;
        tardeca.disabled=true;


    }

    else if(document.getElementById("output").value == "Domingo")
    {

        manhac.hidden=true;
        manhaca.hidden=true;
        horacmanha.hidden=true;
        tardec.hidden=true;
        tardeca.hidden=true;
        horactarde.hidden=true;
        manhaca.disabled=true;
        tardeca.disabled=true;

    }
    else
    {

        manhaca.hidden=true;
        manhac.hidden=true;
        horacmanha.hidden=true;
        tardeca.hidden=false;
        tardec.hidden=false;
        horactarde.hidden=false;
        manhaca.disabled=true;
        tardeca.disabled=false;


        document.getElementById("output").value = dia;

    }
}
function esconderconsultahora2()
{
    var dia = document.getElementById("output").value;

    var manhac= document.getElementById("manhac");
    var manhaca= document.getElementById("manhaca");
    var manhacat= document.getElementById("manhacat");
    var horacmanha= document.getElementById("horacmanha");
    var horacmanhat= document.getElementById("horacmanhat");
    var tardec = document.getElementById("tardec");
    var tardeca = document.getElementById("tardeca");
    var tardecat = document.getElementById("tardecat");
    var horactarde = document.getElementById("horactarde");
    var horactardet = document.getElementById("horactardet");

    if(document.getElementById("output").value == "sabado")
    {
        tardeca.value = "";
        tardecat.value = "";
        manhaca.hidden=false;
        manhacat.hidden=false;
        manhac.hidden=false;
        horacmanha.hidden=false;
        horacmanhat.hidden=false;
        tardeca.hidden=true;
        tardecat.hidden=true;
        tardec.hidden=true;
        horactarde.hidden=true;
        horactardet.hidden=true;
        manhaca.disabled=false;
        manhacat.disabled=false;
        tardeca.disabled=true;
        tardecat.disabled=true;
    }

    else if(document.getElementById("output").value == "Domingo")
    {
        manhaca.value = "";
        manhacat.value = "";
        tardeca.value = "";
        tardecat.value = "";
        manhac.hidden=true;
        manhaca.hidden=true;
        manhacat.hidden=true;
        horacmanha.hidden=true;
        horacmanhat.hidden=true;
        tardec.hidden=true;
        tardeca.hidden=true;
        tardecat.hidden=true;
        horactarde.hidden=true;
        horactardet.hidden=true;
        manhaca.disabled=true;
        manhacat.disabled=true;
        tardeca.disabled=true;
        tardecat.disabled=true;



    }
    else
    {
        manhaca.value = "";
        manhacat.value = "";
        manhaca.hidden=true;
        manhacat.hidden=true;
        manhac.hidden=true;
        horacmanha.hidden=true;
        horacmanhat.hidden=true;
        tardeca.hidden=false;
        tardecat.hidden=false;
        tardec.hidden=false;
        horactarde.hidden=false;
        horactardet.hidden=false;
        manhaca.disabled=true;
        manhacat.disabled=true;
        tardeca.disabled=false;
        tardecat.disabled=false;


        document.getElementById("output").value = dia;

    }
}

function mostrardata() {
    var input = document.getElementById("dia").value;
    var date = new Date(input).getUTCDay();

    var weekday = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-Feira', 'Sabado'];

    document.getElementById('mostrardia').innerHTML = weekday[date];
}



//
// $(document).on("submit", "#disponibilidade[]", function () {
//     var disponibilidades = new Array();
//     $("input[name='disponibilidade[]']:checked")
//         dis.push( parseInt($(this).val()));
//
//     document.getElementsByName("teste2").value = dis;
//
// });
//
// /*$(document).on("submit", "#horario[]", function () {
//     var horarios = new Array();
//     $("input[name='horario[]']:checked")
//         hor.push(parseInt($(this).val()));
//     document.getElementsByName("teste3").value = hor;
//
//
// });*/

function arrayhorario() {
    var horario = document.getElementsByName("horario");
    var h = horario.length;
    var hora = new Array();
    for (var i = 0; i < h; i++) {
        if (horario[i].checked) {
            hora.push(horario[i].value);
            alert(hora);
        }

    }
}

function arraydiponibilidade() {
    var disponibilidade = document.getElementsByName("disponibilidade");
    var d = disponibilidade.length;
    var dispo = new Array();

    for (var i = 0; i < d; i++) {
        if (disponibilidade[i].checked) {
            dispo.push(disponibilidade[i].value);
            alert(dispo);
        }
    }
}

$(function(){
    $(".button-collapse").sideNav();
});






function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");

}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('complemento').value=(conteudo.complemento);

    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('complemento').value="...";
            document.getElementById('numeendereco').focus();


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};
