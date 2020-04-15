@extends('layout')

@section('cabecalho')

@endsection

@section('conteudo')


        <form class="col-md-12" action="{{ url('supervisores/update') }}" method="post">
            @csrf


            <input type="hidden" name="id" value="{{ $supervisor->id }}">
            <fieldset>
                <input placeholder="Nome Completo" type="text" name="nome" value="{{ $supervisor->nome }}" size ="50"  tabindex="1" required autofocus/>
            </fieldset>
            <br>
            <fieldset>
                <input placeholder="Matrícula" type="text" name="id" value="{{ $supervisor->id }}" size="20" tabindex="2" onkeypress="return isNumberKey(event)"/> &nbsp;&nbsp;&nbsp;
                <input placeholder="CRP" type="text" name="crp" value="{{ $supervisor->crp }}" size ="20" tabindex="3" required/>
            </fieldset>
            <br>

            <fieldset>
                Contatos: <br>
                <input placeholder="Celular" type="text" name="celular" value="{{ $supervisor->celular }}" size ="20" tabindex="6"
                       onkeypress="return isNumberKey(event)" required/>
                <br>
                <br>
                <input placeholder="E-mail" type="text" name="email" value="{{ $supervisor->email }}" size="50" tabindex="7" required/><br/>

            </fieldset>
            <fieldset>

                </select>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </fieldset>
    <br/>
            <div class="form-inline my-2 my-lg-0 justify-content-sm-around">
                <button class="btn btn-outline-primary">Salvar</button>
                <a href="{{ url("/supervisores") }}" class="btn btn-outline-danger">voltar</a>
                <a href="{{ url("/") }}" class="btn btn-outline-dark">Home</a>
            </div>
        </form>
    </div>

@endsection
