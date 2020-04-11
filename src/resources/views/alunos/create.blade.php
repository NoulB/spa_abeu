@extends('layout')

@section('cabecalho')
    Cadastro de Alunos para Estágios
@endsection

@section('conteudo')
    <div class="container">

        <form id="contact" action="incluir.php" method="post">

            <h1 style="color:#585858;"> Cadastro de Alunos</h1>
            <fieldset>
                <input placeholder="Matrícula" type="text" name="Matrícula" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Nome completo" type="text" name="nome" tabindex="2" required autofocus>
            </fieldset>

            <fieldset>
                <input placeholder="CPF (Digite somente números)" type="text" name="cpf" tabindex="3" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="RG (Digite somente números)" type="text" name="rg" tabindex="4" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email" type="email" name="email" tabindex="5" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Celular (Digite somente números)" type="tel" name="cel" tabindex="6" required autofocus>
            </fieldset>
            <h2 style="color:#151515;">Data de nascimento:</h2 >
            <fieldset>
                <input placeholder="Data nascimento" type="date" name="data_nascimento" tabindex="7" required autofocus>
            </fieldset>
            <fieldset>
                <h2 style="color:#151515;">Sexo:</h2>
                <select name="sexo">
                    <option value="m"  name ="sexo" id="homem"  tabindex="8" required autofocus selected>Masculino</option>
                    <option value="f" name ="sexo" id="fem" tabindex="9" required autofocus >Feminino</option>
                    <option value="o" name ="sexo" id="outros" tabindex="10" required autofocus>Outro</option>
                </select></fieldset>
            <br><form id="contact" action="incluirteste3.php" method="post">
                <h1 style="color:#585858;"> Dados pessoais do Alunos</h1>
                <fieldset>
                    <input placeholder="Logradouro" type="text" name="Logradouro" tabindex="11" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Numero (Digite somente números)" type="text" name="Numero" tabindex="12" required autofocus>
                </fieldset>

                <fieldset>
                    <input placeholder="Complemento " type="text" name="Complemento" tabindex="13" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Bairro " type="text" name="Bairro" tabindex="14" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Cidade" type="text" name="Cidade" tabindex="15" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="CEP (Digite somente números)" type="text" name="CEP" tabindex="16" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Telefone (Digite somente números)" type="tel" name="Telefone" tabindex="17" required autofocus>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" style="color:#151515;" id="contact-submit" data-submit="...Sending">Cadastrar</button>

                    <p class="c"> <a href="index.php" style="text-decoration:none;color:#151515;" title="Voltar">Voltar</a></p>

                </fieldset>
            </form>
        </form>
    </div>


@endsection
