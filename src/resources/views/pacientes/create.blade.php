@extends('layout')

@section('cabecalho')
    Cadastro de Pacientes
@endsection

@section('conteudo')
    <div>

        <form action="cadastro_pacienteok.php" method="post">
            Nome do Paciente:<br>
            <input type="text" name="nomepac" size ="50" required/><br/>
            CPF:<br>
            <input type="text" name="cpf"/><br/>
            RG:<br>
            <input type="text" name="rg"/><br/>
            Data de Nascimento: <br>
            <input type="date"  placeholder="dd/mm/aaaa" name="dtnasc" required/><br/>
            Sexo:<br/>
            <select name="sexo"> <option value="m">Masculino</option>
                <option value="f">Feminino</option>
                <option value="o">Outro</option> required</select> <br/>
            Nome do Pai:<br>
            <input type="text" name="nomepai" size ="50"/><br/>
            Nome da Mãe:<br>
            <input type="text" name="nomemae" size="50" required/><br/>
            Email:<br>
            <input type="text" name="email"/><br/>
            Celular:<br>
            <input type="text" name="cel" size ="20"/><br/>
            Estado civil: <br/>
            <select name="estadoc"> <option value="Casado">Casado(a)</option>
                <option value="Solteiro">Solteiro(a)</option>
                <option value="Divorciado">Divorciado(a)</option>
                <option value="Viúvo">Viúvo(a)</option> required</select> <br/>
            Nome do(a) Cônjuge:<br/>
            {{--            <input type="text" name="estadoc"/><br/><br/><br/>--}}
            <input type="text" name="conjuge" size ="50" required/><br/><br/><br/>

            <input type = "submit" value ="Enviar">

        </form>
    </div>
@endsection
