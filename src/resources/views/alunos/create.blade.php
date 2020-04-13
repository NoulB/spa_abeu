@extends('layout')

@section('cabecalho')
    Cadastro de Alunos para Estágios
@endsection

@section('conteudo')
    <div >

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        <form method="post">
            @csrf
            <fieldset>
                <input placeholder="Matrícula" type="text" name="matricula" tabindex="1"
                       onkeypress="return isNumberKey(event)" autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Nome completo" type="text" name="nome" tabindex="2" required>
            </fieldset>

            <fieldset>
                <input placeholder="CPF (Somente Números)" type="text" name="cpf" tabindex="3"
                       onkeypress="return isNumberKey(event)" required>
            </fieldset>
            <fieldset>
                <input placeholder="RG (Somente Números)" type="text" name="rg" tabindex="4"
                       onkeypress="return isNumberKey(event)" required>
            </fieldset>
            <fieldset>
                <input placeholder="Email" type="email" name="email" tabindex="5" >
            </fieldset>
            <fieldset>
                <input placeholder="Celular (Somente Números)" type="tel" name="celular" tabindex="6"
                       onkeypress="return isNumberKey(event)" required >
            </fieldset>
            Data de nascimento:
            <fieldset>
                <input placeholder="Data nascimento" type="date" name="data_nascimento" tabindex="7" required>
            </fieldset>
            <fieldset>
                Sexo:
                <select name="sexo">
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>

                </select>
            </fieldset>
            </br></br>


                <div>
                    <button class="btn btn-primary">Adicionar</button>
                    <a href="{{ url("/alunos") }}" class="btn btn-dark btn-action">
                        Voltar
                    </a>
                </div>

        </form>
    </div>


@endsection
