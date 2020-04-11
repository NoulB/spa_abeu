<!doctype html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de séries</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1>@yield('cabecalho')</h1>
    </div>

    @yield('conteudo')

</div>

<script language = javascript>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function verifica(value) {
        var input = document.getElementById("input");

        if (value == 'Casado') {
            input.hidden = false;
        } else if (value == 'Solteiro') {
            input.hidden = true;
            input.value = "";
        }
        else if (value == 'Viúvo') {
            input.hidden = true;
            input.value = "";
        }
        else if (value == 'Divorciado') {
            input.hidden = true;
            input.value = "";
        }
    }
</script>

</body>

</html>
