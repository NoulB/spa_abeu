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
<div class="teste"><h7 align="right">Gerado em: {{$consultas2->format('d/m/Y')}}</h7></div>

<br><br><br>
{{--<h4 style="text-align:center">Consultas Não Realizadas</h4>--}}

{{--<table class="table table-condensed">--}}
{{--    <thead class="table-secondary">--}}
{{--    <tr>--}}
{{--        <th>Paciente</th>--}}
{{--        <th>Aluno</th>--}}
{{--        <th>Supervisor</th>--}}
{{--        <th>Horario</th>--}}
{{--        <th>Situação</th>--}}
{{--        <th>Dia</th>--}}


{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody class="table-default">--}}
{{--    @foreach($consultas1 as $consulta)--}}
{{--        <tr>--}}
{{--            <td>{{ $consulta->paciente }}</td>--}}
{{--            <td>{{ $consulta->aluno }}</td>--}}
{{--            <td>{{ $consulta->supervisor }}</td>--}}
{{--            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}</td>--}}
{{--            <td>{{ $consulta->status }}</td>--}}
{{--            <td>{{\Carbon\Carbon::parse($consulta->dia)->format('d/m/Y')}}</td>--}}


{{--        </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}
{{--    </table>--}}
{{--<br>--}}
<h4 style="text-align:center">Consultas Realizadas</h4>

<table class="table table-condensed">
    <thead class="table-secondary">
    <tr>
        <th>Paciente</th>
        <th>Aluno</th>
        <th>Supervisor</th>
        <th>Horario</th>
        <th>Situação</th>
        <th>Dia</th>


    </tr>
    </thead>
    <tbody class="table-default">
    @foreach($consultas5 as $consulta)
        <tr>
            <td>{{ $consulta->paciente }}</td>
            <td>{{ $consulta->aluno }}</td>
            <td>{{ $consulta->supervisor }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}</td>
            <td>{{ $consulta->status }}</td>
            <td>{{\Carbon\Carbon::parse($consulta->dia)->format('d/m/Y')}}</td>


        </tr>
    @endforeach

    </tbody>
</table>
<br>
{{--<h4 style="text-align:center">Relatório de Consultas</h4>--}}

{{--<table class="table table-condensed">--}}
{{--    <thead class="table-secondary">--}}
{{--    <tr>--}}
{{--        <th>Paciente</th>--}}
{{--        <th>Aluno</th>--}}
{{--        <th>Supervisor</th>--}}
{{--        <th>Horario</th>--}}
{{--        <th>Situação</th>--}}
{{--        <th>Dia</th>--}}


{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody class="table-default">--}}
{{--    @foreach($consultas4 as $consulta)--}}
{{--        <tr>--}}
{{--            <td>{{ $consulta->paciente }}</td>--}}
{{--            <td>{{ $consulta->aluno }}</td>--}}
{{--            <td>{{ $consulta->supervisor }}</td>--}}
{{--            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}</td>--}}
{{--            <td>{{ $consulta->status }}</td>--}}
{{--            <td>{{\Carbon\Carbon::parse($consulta->dia)->format('d/m/Y')}}</td>--}}


{{--        </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}
{{--</table>--}}
{{--<br>--}}
<h4 style="text-align:center">Consultas Canceladas</h4>

<table class="table table-condensed">
    <thead class="table-secondary">
    <tr>
        <th>Paciente</th>
        <th>Aluno</th>
        <th>Supervisor</th>
        <th>Horario</th>
        <th>Situação</th>
        <th>Dia</th>


    </tr>
    </thead>
    <tbody class="table-default">
    @foreach($consultas3 as $consulta)
        <tr>
            <td>{{ $consulta->paciente }}</td>
            <td>{{ $consulta->aluno }}</td>
            <td>{{ $consulta->supervisor }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s',$consulta->hora)->format('H:i') }}</td>
            <td>{{ $consulta->status }}</td>
            <td>{{\Carbon\Carbon::parse($consulta->dia)->format('d/m/Y')}}</td>


        </tr>
    @endforeach

    </tbody>
</table>
<br>
{{--<div class="teste1"><h7 style="text-align:left">Consultas Cadastradas: {{$consultas4->count()+$consultas3->count()+$consultas1->count()}}</h7></div>--}}
<div class="teste2"><h7>Gerado em: {{$consultas2->addHours(-3)->format('G:i:s')}}</h7></div>
</body>
</html>
