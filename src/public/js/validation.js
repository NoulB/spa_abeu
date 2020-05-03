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
        i12.value = "";
    } else if (value == 'Viúvo') {
        i12.hidden = true;
        i12.value = "";
    } else if (value == 'Divorciado') {
        i12.hidden = true;
        i12.value = "";
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


    function myFunction() {
        var checkBox = document.getElementById("Total1");
        var text = document.getElementById("total");
        var text2 = document.getElementById("segunda");
        var text3 = document.getElementById("terca");
        var text4 = document.getElementById("quarta");
        var text5 = document.getElementById("quinta");
        var text6 = document.getElementById("sexta");
        var text7 = document.getElementById("sabado");
        var text8 = document.getElementById("total2");
        var text9 = document.getElementById("manha");
        var text10 = document.getElementById("tarde");
        var text11 = document.getElementById("noite");
        var text12 = document.getElementById("08h");
        var text13 = document.getElementById("09h");
        var text14 = document.getElementById("10h");
        var text15 = document.getElementById("11h");
        var text16 = document.getElementById("13h");
        var text17 = document.getElementById("14h");
        var text18 = document.getElementById("15h");
        var text19 = document.getElementById("16h");
        var text20 = document.getElementById("17h");
        var text21 = document.getElementById("18h");
        var text22 = document.getElementById("19h");
        var text23 = document.getElementById("20h");
        if (checkBox.checked == false){
            text2.hidden= false;
            text3.hidden= false;
            text4.hidden= false;
            text5.hidden= false;
            text6.hidden= false;
            text7.hidden= false;


        } else {
            text2.hidden=true;
            text3.hidden=true;
            text4.hidden=true;
            text5.hidden=true;
            text6.hidden=true;
            text7.hidden=true;
            text8.hidden=false;
            text9.hidden=false;
            text10.hidden=false;
            text11.hidden=false;
            text12.hidden=true;
            text13.hidden=true;
            text14.hidden=true;
            text15.hidden=true;
            text16.hidden=true;
            text17.hidden=true;
            text18.hidden=true;
            text19.hidden=true;
            text20.hidden=true;
            text21.hidden=true;
            text22.hidden=true;
            text23.hidden=true;
            document.getElementById("tipo2").checked = false;
            document.getElementById("tipo3").checked = false;
            document.getElementById("tipo4").checked = false;
            document.getElementById("tipo5").checked = false;
            document.getElementById("tipo6").checked = false;
            document.getElementById("tipo7").checked = false;
            document.getElementById("tipomanha").checked = false;
            document.getElementById("tipotarde").checked = false;
            document.getElementById("tiponoite").checked = false;
            document.getElementById("tipo08h").checked = false;
            document.getElementById("tipo09h").checked = false;
            document.getElementById("tipo10h").checked = false;
            document.getElementById("tipo11h").checked = false;
            document.getElementById("tipo13h").checked = false;
            document.getElementById("tipo14h").checked = false;
            document.getElementById("tipo15h").checked = false;
            document.getElementById("tipo16h").checked = false;
            document.getElementById("tipo17h").checked = false;
            document.getElementById("tipo18h").checked = false;
            document.getElementById("tipo19h").checked = false;
            document.getElementById("tipo20h").checked = false;
        }
    }

function myFunction1() {
    var checkBox = document.getElementById("Total22");
    var text2 = document.getElementById("manha");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false){
        text2.hidden= false;
        text3.hidden= false;
        text4.hidden= false;


        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;

    } else {
        text2.hidden=true;
        text3.hidden=true;
        text4.hidden=true;
        text5.hidden=true;
        text6.hidden=true;
        text7.hidden=true;
        text8.hidden=true;
        text9.hidden=true;
        text10.hidden=true;
        text11.hidden=true;
        text12.hidden=true;
        text13.hidden=true;
        text14.hidden=true;
        text15.hidden=true;
        text16.hidden=true;


    }
}
function myFunction2() {
    var checkBox = document.getElementById("tipomanha");
    var text2 = document.getElementById("08h");
    var text3 = document.getElementById("09h");
    var text4 = document.getElementById("10h");
    var text5 = document.getElementById("11h");

    if (checkBox.checked == true){
        text2.hidden= false;
        text3.hidden= false;
        text4.hidden= false;
        text5.hidden= false;



    } else {
        text2.hidden=true;
        text3.hidden=true;
        text4.hidden=true;
        text5.hidden=true;

    }
}
function myFunction3() {
    var checkBox = document.getElementById("tipotarde");
    var text2 = document.getElementById("13h");
    var text3 = document.getElementById("14h");
    var text4 = document.getElementById("15h");
    var text5 = document.getElementById("16h");
    var text6 = document.getElementById("17h");


    if (checkBox.checked == true){
        text2.hidden= false;
        text3.hidden= false;
        text4.hidden= false;
        text5.hidden= false;
        text6.hidden= false;



    } else {
        text2.hidden=true;
        text3.hidden=true;
        text4.hidden=true;
        text5.hidden=true;
        text6.hidden=true;

    }
}
function myFunction4() {
    var checkBox = document.getElementById("tiponoite");
    var text2 = document.getElementById("18h");
    var text3 = document.getElementById("19h");
    var text4 = document.getElementById("20h");

    if (checkBox.checked == true){
        text2.hidden= false;
        text3.hidden= false;
        text4.hidden= false;



    } else {
        text2.hidden=true;
        text3.hidden=true;
        text4.hidden=true;

    }
}
    function myFunction5() {
    var checkBox = document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");
    var text18 = document.getElementById("tipo6");
    var text19 = document.getElementById("tipo2");
    var text20 = document.getElementById("tipo3");
    var text21 = document.getElementById("tipo4");
    var text22 = document.getElementById("tipo5");

    if (checkBox.checked == false ) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;

        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo6").checked = false;  }
    else if(checkBox.checked == true && text18.checked == true || (checkBox.checked == true && text19.checked == true) ||
        (checkBox.checked == true && text20.checked == true)||(checkBox.checked == true && text21.checked == true) ||
        (checkBox.checked == true && text22.checked == true)  ){
        text17.hidden = false;
    }
    else if (checkBox.checked == true )
    {
        text2.hidden = true;
        text3.hidden = true;
        text4.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;

    }

}

function myFunction6() {
    var checkBox = document.getElementById("tipo6");
    var text= document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;
        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo7").checked = false;
    }
    else if(checkBox.checked == true && text.checked == true){
        text3.hidden = false;
        text4.hidden = false;
    }
    else if(checkBox.checked == false && text.checked == true){
        text3.hidden = true;
        text4.hidden = true;
    }

    else {
        text2.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        text17.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;
    }
}
function myFunction7() {
    var checkBox = document.getElementById("tipo5");
    var text= document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;
        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo6").checked = false;
        document.getElementById("tipo7").checked = false;
    }
    else if(checkBox.checked == true && text.checked == true){
        text3.hidden = false;
        text4.hidden = false;
    }
    else if(checkBox.checked == false && text.checked == true){
        text3.hidden = true;
        text4.hidden = true;
    }

    else {
        text2.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        text17.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;
    }
}
function myFunction8() {
    var checkBox = document.getElementById("tipo4");
    var text= document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;
        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo6").checked = false;
        document.getElementById("tipo7").checked = false;
    }
    else if(checkBox.checked == true && text.checked == true){
        text3.hidden = false;
        text4.hidden = false;
    }
    else if(checkBox.checked == false && text.checked == true){
        text3.hidden = true;
        text4.hidden = true;
    }

    else {
        text2.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        text17.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;
    }
}
function myFunction9() {
    var checkBox = document.getElementById("tipo3");
    var text= document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;
        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo6").checked = false;
        document.getElementById("tipo7").checked = false;
    }
    else if(checkBox.checked == true && text.checked == true){
        text3.hidden = false;
        text4.hidden = false;
    }
    else if(checkBox.checked == false && text.checked == true){
        text3.hidden = true;
        text4.hidden = true;
    }

    else {
        text2.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        text17.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;
    }
}
function myFunction10() {
    var checkBox = document.getElementById("tipo2");
    var text= document.getElementById("tipo7");
    var text2 = document.getElementById("total2");
    var text3 = document.getElementById("tarde");
    var text4 = document.getElementById("noite");
    var text17 = document.getElementById("manha");
    var text5 = document.getElementById("08h");
    var text6 = document.getElementById("09h");
    var text7 = document.getElementById("10h");
    var text8 = document.getElementById("11h");
    var text9 = document.getElementById("13h");
    var text10 = document.getElementById("14h");
    var text11 = document.getElementById("15h");
    var text12 = document.getElementById("16h");
    var text13 = document.getElementById("17h");
    var text14 = document.getElementById("18h");
    var text15 = document.getElementById("19h");
    var text16 = document.getElementById("20h");

    if (checkBox.checked == false) {
        text2.hidden = false;
        text3.hidden = false;
        text4.hidden = false;
        text17.hidden = false;
        document.getElementById("tipo2").checked = false;
        document.getElementById("tipo3").checked = false;
        document.getElementById("tipo4").checked = false;
        document.getElementById("tipo5").checked = false;
        document.getElementById("tipo6").checked = false;
        document.getElementById("tipo7").checked = false;
    }
    else if(checkBox.checked == true && text.checked == true){
        text3.hidden = false;
        text4.hidden = false;
    }
    else if(checkBox.checked == false && text.checked == true){
        text3.hidden = true;
        text4.hidden = true;
    }

    else {
        text2.hidden = true;
        text5.hidden = true;
        text6.hidden = true;
        text7.hidden = true;
        text8.hidden = true;
        text9.hidden = true;
        text10.hidden = true;
        text11.hidden = true;
        text12.hidden = true;
        text13.hidden = true;
        text14.hidden = true;
        text15.hidden = true;
        text16.hidden = true;
        text17.hidden = true;
        document.getElementById("Total22").checked = false;
        document.getElementById("tipomanha").checked = false;
        document.getElementById("tipotarde").checked = false;
        document.getElementById("tiponoite").checked = false;
        document.getElementById("tipo08h").checked = false;
        document.getElementById("tipo09h").checked = false;
        document.getElementById("tipo10h").checked = false;
        document.getElementById("tipo11h").checked = false;
        document.getElementById("tipo13h").checked = false;
        document.getElementById("tipo14h").checked = false;
        document.getElementById("tipo15h").checked = false;
        document.getElementById("tipo16h").checked = false;
        document.getElementById("tipo17h").checked = false;
        document.getElementById("tipo18h").checked = false;
        document.getElementById("tipo19h").checked = false;
        document.getElementById("tipo20h").checked = false;
    }
}
