@extends('layout')


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
        var input = document.getElementById("input");

        if (value == 'Casado') {
            input.hidden = false;
        } else if (value == 'Solteiro') {
            input.hidden = true;
            input.value = "";
        } else if (value == 'Viúvo') {
            input.hidden = true;
            input.value = "";
        } else if (value == 'Divorciado') {
            input.hidden = true;
            input.value = "";
        }
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


</body>

</html>
