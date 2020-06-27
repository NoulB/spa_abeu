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
    <div class="teste"><h7>Gerado em: {{$paciente2->format('d/m/Y')}}</h7></div>
    <br><br>  <br>

    <h4 style="text-align:center">Pacientes em Espera</h4>
    <table class="table table-condensed">
        <thead class="table-secondary">
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Nascimento</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody class="table-default">
        @foreach($paciente1 as $pacientes)
        <tr>
            <td >{{$pacientes->nome}}</td>
                <td >{{$pacientes->cpf}}</td>
                <td >{{\Carbon\Carbon::parse($pacientes->data_nascimento)->format('d/m/Y')}}</td>
                <td > {{\Carbon\Carbon::parse($pacientes->data_nascimento)->age}}</td>
                <td>{{$pacientes->telefone}}</td>
                <td >{{$pacientes->email}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <div class="teste1"> <h7 style="text-align:left">Total de Pacientes Deletados: {{$paciente1->count()}}</h7></div>
    <div class="teste2"><h7>Gerado em: {{$paciente2->addHours(-3)->format('G:i:s')}}</h7></div>
    </body>
    </html>
