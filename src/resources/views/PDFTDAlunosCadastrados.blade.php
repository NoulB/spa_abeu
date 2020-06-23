<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        <?php include(public_path().'/css/style.css');?>

    </style>
</head>
<div class="teste1"><img src="{{ public_path('imgs/07.jpg')}}" height="50" width="100"/></div><br>
<div class="teste"><h7 align="right">Gerado em: {{$aluno2->format('d/m/Y')}}</h7></div>
<br><br><br>
<h4 style="text-align:center">Alunos Ativos</h4>
<table class="table table-condensed">
    <thead class="table-secondary">
    <tr>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Celular</th>

    </tr>
    </thead>
    <tbody class="table-default">
@foreach($aluno as $alunos)
        <tr>
            <td>{{$alunos->nome}}</td>
            <td>{{$alunos->cpf}}</td>
            <td>{{$alunos->data_nascimento}}</td>
            <td>{{$alunos->email}}</td>
            <td>{{$alunos->celular}}</td>
        </tr>
@endforeach
        </tbody>
    </table>

        <br>
<div class="teste1"><h7 style="text-align:left">Total de Alunos Ativos: {{$aluno->count()}}</h7></div>
<div class="teste2"><h7>Gerado em: {{$aluno2->addHours(-3)->format('G:i:s')}}</h7></div>
    </body>
</html>
