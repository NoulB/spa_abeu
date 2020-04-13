@extends('layout')

@section('cabecalho')
    Cadastro de Pacientes
@endsection

@section('conteudo')

    <div>

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
                <input placeholder="Nome completo" type="text" name="nome" size="50" tabindex="1" required autofocus/>
            </fieldset>
            <fieldset>
                <input placeholder="CPF somente números)" type="text" name="cpf" tabindex="2"
                       onkeypress="return isNumberKey(event)" required/>

                <input placeholder="RG - somente números" type="text" name="rg" tabindex="3"
                       onkeypress="return isNumberKey(event)" required/>
            </fieldset>
            <fieldset>
                Data de Nascimento:<br/>
                <input type="date" name="data_nascimento" tabindex="4" required/>

                <input placeholder="E-mail" type="text" name="email" tabindex="6"/><br/>
            </fieldset>
            <fieldset>
                <input placeholder="Celular - somente números" type="text" name="celular" size="20" tabindex="7"
                       onkeypress="return isNumberKey(event)"/>
                <input placeholder="Telefone 2" type="text" name="telefone" size="20" tabindex="8"
                       onkeypress="return isNumberKey(event)"/>
            </fieldset>
            <fieldset>
                <input placeholder="Nome do Pai" type="text" name="pai" size="50" tabindex="9"/>
            </fieldset>
            <fieldset>
                <input placeholder="Nome da Mãe" type="text" name="mae" size="50" required tabindex="10"/>
            </fieldset>
            <fieldset>
                Sexo:
                <select name="sexo" tabindex="10">
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                    required
                </select>
                Estado civil:
                <select id="options" name="estado_civil" onchange="verifica(this.value)">
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro" selected>Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Viúvo">Viúvo(a)</option>
                    required
                </select>
            </fieldset>
            <fieldset>
                <input placeholder="Nome do(a) Cônjuge" type="text" id="input" name="conjuge" size="50" hidden/>
            </fieldset>
            Endereço:<br/>
            <fieldset>
                <input placeholder="Logradouro" type="text" name="logradouro" size="37" required tabindex="14"/>
                <input placeholder="Numero" type="text" name="numero" size="10" required tabindex="15"
                       onkeypress="return isNumberKey(event)"/>
            </fieldset>
            <fieldset>
                <input placeholder="Complemento" type="text" name="complemento" size="20" tabindex="16"/>
                <input placeholder="Bairro" type="text" name="bairro" size="27" required tabindex="17"/>
            </fieldset>
            <fieldset>
                <input placeholder="Cidade" type="text" name="cidade" size="27" required tabindex="18"/>
                <input placeholder="CEP" type="text" name="cep" size="20" required tabindex="19"
                       onkeypress="return isNumberKey(event)"/>
            </fieldset>
            <br/>
            <button class="btn btn-primary">Adicionar</button>
        </form>
    </div>

@endsection
