@extends('layout')

@section('cabecalho')
    Cadastro de Supervisores
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
                <input placeholder="Nome" type="text" name="nome" size ="50"  tabindex="1" required autofocus/>
            </fieldset>
            <br>
            <fieldset>
                <input placeholder="Matrícula" type="text" name="matricula" size="20" tabindex="2" onkeypress="return isNumberKey(event)"/> &nbsp;&nbsp;&nbsp;
                <input placeholder="CRP" type="text" name="crp" size ="20" tabindex="3" required/>
            </fieldset>
            <br>

            <fieldset>
                Contatos: <br>
                <input placeholder="Celular" type="text" name="celular" size ="20" tabindex="6"
                       onkeypress="return isNumberKey(event)"/>
                <br>
                <br>
                <input placeholder="E-mail" type="text" name="email" size="50" tabindex="7"/><br/>

            </fieldset>
            <fieldset>

                </select>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </fieldset>
    <br/>
            <button class="btn btn-primary">Adicionar</button>
        </form>
    </div>

@endsection
