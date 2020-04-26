<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .btn-action {
            float: right;
        }

        a:link {
            text-decoration: none;
            color: black;
        }

        body {
            background-color: lightblue;
        }

        #container {
            background-color: white;
        }

        .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            background-color: #e3f2fd;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light justify-content-between" style="background-color: #e3f2fd;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse dual-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link pl-0" href="/">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
        <a href="#" class="navbar-brand mx-auto d-block text-center w-100"><h1>@yield('cabecalho')</h1></a>

        <div class="navbar-collapse collapse dual-nav w-100">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>













<div class="container" id="container">
    @yield('conteudo')

</div>


<script language=javascript>

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
    function ValidaCPF(){
        var inputcpf=document.forms.form1.inputcpf.value;
        var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;
        inputcpf = inputcpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        inputcpf = inputcpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        inputcpf = inputcpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos

        var valorValido = document.getElementById("inputcpf").value = inputcpf;
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


</script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/eaac765724.js" crossorigin="anonymous"></script>


<script src="../teste.js"></script>

</body>

</html>
