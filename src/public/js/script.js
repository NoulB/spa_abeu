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

    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;

    var strCPF = "12345678909";
    alert(TestaCPF(strCPF));}

function ValidaCPF() {
    var strCPF = document.getElementById('inputcpf').value;
    if (!verificarCPF(strCPF)) {
        alert("CPF inválido");
        var strCpf = document.getElementById('inputcpf').value="";
        return;
    }
    else{
        var inputcpf=document.forms.form1.inputcpf.value;
        var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
        inputcpf = inputcpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        inputcpf = inputcpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        inputcpf = inputcpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos

        var valorValido = document.getElementById("inputcpf").value = inputcpf;}
}
function ValidaCEL(){
    var inputcel=document.forms.form1.inputcel.value;
    var celValido = /^(([0-9]{2}.[0-9]{5}.[0-9]{4}))$/;
    inputcel = inputcel.replace( /(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    var valorValido = document.getElementById("inputcel").value = inputcel;
}
function ValidaTEL(){
    var inputtel=document.forms.form1.inputtel.value;
    var telValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputtel = inputtel.replace( /(\d{2})(\d{8})/, '($1) $2');
    var valorValido = document.getElementById("inputtel").value = inputtel;
}
function ValidaCEP(){
    var inputcep=document.forms.form1.inputcep.value;
    var cepValido = /^(([0-9]{2}.[0-9]{8}))$/;
    inputcep = inputcep.replace( /(\d{5})(\d{3})/, '$1-$2');
    var valorValido = document.getElementById("inputcep").value =inputcep;
}


document.getElementById("input4").addEventListener('change', function() {
    var data = new Date(this.value);
    if(isDate_(this.value) && data.getFullYear() > 1900)
        document.getElementById("idade").value = calculateAge(this.value);
});

function calculateAge(dobString) {
    var dob = new Date(dobString);
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var birthdayThisYear = new Date(currentYear, dob.getMonth(), dob.getDate());
    var age = currentYear - dob.getFullYear();
    if(birthdayThisYear > currentDate) {
        age--;
    }
    return age;
}
    function calcular(data) {
        var data = document.form.nascimento.value;
        alert(data);
        var partes = data.split("/");
        var junta = partes[2]+"-"+partes[1]+"-"+partes[0];
        document.form.idade.value = (calculateAge(junta));
    }

    var isDate_ = function(input) {
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



