function ValidaCPF(){
    var ao_cpf=document.forms.form1.ao_cpf.value;
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
    ao_cpf = ao_cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    ao_cpf = ao_cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
    //de novo (para o segundo bloco de números)
    ao_cpf = ao_cpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos

    var valorValido = document.getElementById("ao_cpf").value = ao_cpf;
}

function ValidacCEL(){
    var ao_cel=document.forms.form1.ao_cel.value;
    var celValido = /^(([0-9]{2}.[0-9]{5}.[0-9]{4}))$/;
    ao_cel = ao_cel.replace( /(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    var valorValido = document.getElementById("ao_cel").value = ao_cel;
}
function ValidacTEL(){
    var ao_tel=document.forms.form1.ao_tel.value;
    var telValido = /^(([0-9]{2}.[0-9]{8}))$/;
    ao_tel = ao_tel.replace( /(\d{2})(\d{8})/, '($1) $2');
    var valorValido = document.getElementById("ao_tel").value = ao_tel;
}