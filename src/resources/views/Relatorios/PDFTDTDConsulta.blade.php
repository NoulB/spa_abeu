<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;

        }

        table.center {
            margin-left: auto;
            margin-right: auto;

        }

        td, th {
            text-align: center;
            width: 35px;
        }

        .teste {
            position: absolute;
            left: 75%;
        }

        .teste1 {
            position: absolute;
            left: 0;
        }
        .teste2 {
            position: absolute;
            left: 80%;
        }
    </style>
</head>
<div class="teste"><h4>Gerado em: {{$consultas2->format('d/m/Y')}}</h4></div>
<div class="teste1"><img src="{{ public_path('imgs/07.jpg')}}" height="50" width="100"/></div>
<br><br><br><br>
<h4 style="text-align:left">Total de Consultas Ativas: {{$consultas->count()}}</h4>
<h4 style="text-align:left">Total de Consultas Realizadas: {{$consultas1->count()}}</h4><br/>

<h2 style="text-align:center">Todos os Alunos Cadastrados</h2>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>ID do Aluno</th>
        <th>ID do Supervisor</th>
        <th>dia</th>
        <th>hora</th>
        <th>consultório</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
@foreach($consultas as $Consulta)
        <tr>
            <td>{{$Consulta->id}}</td>
            <td>{{$Consulta->alunos_id}}</td>
            <td>{{$Consulta->supervisores_id}}</td>
            <td>{{$Consulta->dia}}</td>
            <td>{{$Consulta->hora}}</td>
            <td>{{$Consulta->consultorio}}</td>
            <td>{{$Consulta->status}}</td>
        </tr>
@endforeach
        </tbody>
    </table>
<br>
<h2 style="text-align:center">Todos os Alunos Deletados do Sistema</h2>
<br>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>ID do Aluno</th>
        <th>ID do Supervisor</th>
        <th>dia</th>
        <th>hora</th>
        <th>consultório</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
@foreach($consultas1 as $Consulta)

        <tr>
            <td>{{$Consulta->id}}</td>
            <td>{{$Consulta->alunos_id}}</td>
            <td>{{$Consulta->supervisores_id}}</td>
            <td>{{$Consulta->dia}}</td>
            <td>{{$Consulta->hora}}</td>
            <td>{{$Consulta->consultorio}}</td>
            <td>{{$Consulta->status}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
        <br/>
<div class="teste2"><h5>Gerado em: {{$consultas2->addHours(-3)->format('G:i:s')}}</h5></div>
    </body>
</html>
