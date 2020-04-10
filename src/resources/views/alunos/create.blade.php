@extends('layout')

@section('cabecalho')
    Cadastro de Alunos para Estágios
@endsection

@section('conteudo')
    <div>

        <form action="cadastro_aluno.php" method="post">
            Nome do Aluno:<br>
            <input type="text" name="nomepac" size ="50" required/><br/>
            Matrícula:<br>
            <input type="text" name="matricula"/><br/>
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

            Email:<br>
            <input type="text" name="email"/><br/>
            Celular:<br>
            <input type="text" name="cel" size ="20"/><br/>

            <input type = "submit" value ="Enviar">

        </form>
    </div>
@endsection
