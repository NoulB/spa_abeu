@extends('layout')

@section('cabecalho')
    Cadastro de Pacientes
@endsection

@section('conteudo')
    <div>

        <form   method="post">
            @csrf
            Nome do Paciente:<br>
            <input type="text" name="nome" size ="50" required/><br/>
            CPF:<br>
            <input type="text" name="cpf"/><br/>
            RG:<br>
            <input type="text" name="rg"/><br/>
            Data de Nascimento: <br>
            <input type="date"  placeholder="dd/mm/aaaa" name="data_nascimento" required/><br/>
            Sexo:<br/>
            <select name="sexo"> <option value="m">Masculino</option>
                                 <option value="f">Feminino</option>
                                 <option value="o">Outro</option>required</select> <br/>
            Email:<br>
            <input type="text" name="email"/><br/>
            Celular:
            <input type="text" name="celular" size ="20"/><br/>
            Telefone 2
            <input type="text" name="telefone" size ="20"/><br/>
            Nome do Pai:<br>
            <input type="text" name="pai" size ="50"/><br/>
            Nome da Mãe:<br>
            <input type="text" name="mae" size="50" required/><br/>
            Estado civil: <br/>
            <select name="estado_civil"> <option value="Casado">Casado(a)</option>
                                         <option value="Solteiro">Solteiro(a)</option>
                                         <option value="Divorciado">Divorciado(a)</option>
                                         <option value="Viúvo">Viúvo(a)</option> required</select> <br/>
            Nome do(a) Cônjuge:<br/>
            {{--            <input type="text" name="estadoc"/><br/><br/><br/>--}}
            <input type="text" name="conjuge" size ="50" /><br/>
            Endereço:<br/>
            Logradouro:
            <input type="text" name="logradouro" size="50" required/><br/>
            Numero:
            <input type="text" name="numero" size="10" required/><br/>
            Complemento:
            <input type="text" name="complemento" size="20" required/><br/>
            Bairro:
            <input type="text" name="bairro" size="20" required/><br/>
            Cidade:
            <input type="text" name="cidade" size="20" required/><br/>
            CEP:
            <input type="text" name="cep" size="20" required/><br/><br/><br/>

            <button class="btn btn-primary">Adicionar</button>

        </form>
    </div>
@endsection
