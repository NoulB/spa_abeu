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
<div class="teste"><h7>Gerado em: {{$supervisores2->format('d/m/Y')}}</h7></div>
<br><br><br>
<h4 style="text-align:center">Todos os Supervisores Deletados do Sistema</h4>
<table class="table table-condensed">
    <thead class="table-secondary">
    <tr>
        <th>Nome</th>
        <th>Crp</th>
        <th>Email</th>
        <th>Celular</th>
    </tr>
    </thead>
    <tbody class="table-default">
@foreach($supervisores1 as $supervisores )
    <tr>
        <td>{{$supervisores->nome}}</td>
            <td>{{$supervisores->crp}}</td>
            <td>{{$supervisores->email}}</td>
            <td>{{$supervisores->celular}}</td>
    </tr>
@endforeach
    </tbody>
</table>
<br>
<div class="teste1"><h7 style="text-align:left">Total de Supervisores Deletados: {{$supervisores1->count()}}</h7></div>
<div class="teste2"><h7>Gerado em: {{$supervisores2->addHours(-3)->format('G:i:s')}}</h7></div>
</body>
</html>
