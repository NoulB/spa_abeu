<!doctype html>
<html lang="pt-br">
<head>
    <title></title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">




    <style>
        /*MODO DARK*/
        th {

            color: white;
        }

        a:link {
            text-decoration: none;
            color: white;
        }

        a:visited {
            text-decoration: none;
            color: white;
        }

        .pagination > li > a
        {
            background-color: white;
            color: #5A4181;
        }

        .pagination > li > a:focus,
        .pagination > li > a:hover,
        .pagination > li > span:focus,
        .pagination > li > span:hover
        {
            color: #5a5a5a;
            background-color: #eee;
            border-color: #ddd;
        }

        .pagination > .active > a
        {
            color: white;
            background-color: #5A4181 !Important;
            border: solid 1px #5A4181 !Important;
        }

        .pagination > .active > a:hover
        {
            background-color: #5A4181 !Important;
            border: solid 1px #5A4181;
        }

        body {
            background-color: #242526;
        }

        #container {
            background-color: #3a3b3c;
        }

        .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            background-color: #242526;
        }

        /*MODO CLARO*/
        /*a:link {*/
        /*    text-decoration: none;*/
        /*    color: black;*/
        /*}*/

        /*a:visited {*/
        /*    text-decoration: none;*/
        /*    color: black;*/
        /*}*/

        /*body {*/
        /*    background-color: lightblue;*/
        /*}*/

        /*#container {*/
        /*    background-color: white;*/
        /*}*/

        /*.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {*/
        /*    background-color: #e3f2fd;*/
        /*}*/
        /*  ESTILOS DA BUSCA DE PESSOAS NO CADASTRO DE CONSULTAS    */
        .autocompletegroup {
            position: relative;
        }
        .autocompletebox {
            position: absolute;
            background-color: #eee;
            border: solid thin #ccc;
            padding: 10px;
            border-radius: 5px;
            z-index: 10;
            width: 740px;
            margin-top: 3px;
            display: none;
        }
        .autocompletebox.visible{
            display: block;
        }
        .select-class{
            margin-bottom: 10px;
            display: block;
            cursor: pointer;

        }
        .chipsbox{
            padding: 0;
        }
        .chip{
            position: relative;
            background-color: #CCC;
            margin-right: 10px;
            border-radius: 10px;
            height: 20px;
            padding: 0 25px 0 15px;
            font-size: 14px;
        }
        .chip a{
            color: #242526;
        }
        .closechip{
            position: absolute;
            font-weight: bold;
            font-size: 25px;
            margin-left: 10px;
            color: white;
            transform: rotate(45deg);
            top: -11px;
            right: 2px;
            cursor: pointer;
        }
        #erro-box{
            position: relative;
            display: none;
            color: red;
            font-weight: bold;
            background-color: #eee;
            padding: 15px;
            border-radius: 5px;
        }
        #erro-box.visible{
            display: block;
        }
        .erro-box-close{
            position: absolute;
            font-weight: bold;
            font-size: 40px;
            color: black;
            transform: rotate(45deg);
            top: -11px;
            right: 2px;
            cursor: pointer;
        }
        .active {
            background-color: green;
            color: white;
        }

    </style>
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}

</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

        <a href="/">Início</a>
        <button class="dropdown-btn">Pacientes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/pacientes" >Buscar Pacientes</a>
            <a class="dropdown-item" href="/pacientes/criar" >Cadastrar Pacientes</a>

        </div>
        <button class="dropdown-btn">Alunos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/alunos" >Buscar Alunos</a>
            <a class="dropdown-item" href="/alunos/criar" >Cadastrar Alunos</a>
        </div>
        <button class="dropdown-btn">Supervisores
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/supervisores" >Buscar Supervisores</a>
            <a class="dropdown-item" href="/supervisores/criar" >Cadastrar Supervisores</a>
        </div>
        <button class="dropdown-btn">Consultas
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/" >Buscar Consultas</a>
            <a class="dropdown-item" href="/consultas/criar" >Cadastrar Consultas</a>
        </div>
        <button class="dropdown-btn">Projetos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/projetos" >Buscar Projetos</a>
            <a class="dropdown-item" href="/projetos/criar" >Cadastrar Projetos</a>
        </div>
        <button class="dropdown-btn">Relatórios
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-item" href="/PDFTDPacientesCadastrados"target="_blank" >Relatório de Pacientes Ativos</a>
            <a class="dropdown-item" href="/PDFTDSupervisoresCadastrados"target="_blank" >Relatório de Supervisores Cadastrados</a>
            <a class="dropdown-item" href="/PDFTDAlunosCadastrados"target="_blank" >Relatório de Alunos Ativos</a>
            <a class="dropdown-item" href="/PDFTDConsultas2" target="_blank" >Relatório de Consultas</a>
            <a class="dropdown-item" href="/PDFTDProjetos" target="_blank">Relatório de Projetos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/PDFTDPacientesDeletados"target="_blank" >Relatório de Pacientes em Espera</a>
            <a class="dropdown-item" href="/PDFTDSupervisoresDeletados"target="_blank" >Relatório de Supervisores Deletados</a>
            <a class="dropdown-item" href="/PDFTDAlunosDeletados"target="_blank" >Relatório de Alunos em Espera</a>

        </div>
    </div>


<nav class="navbar navbar-expand-lg navbar-dark justify-content-between" style="background-color: #18191A;">

    <div class="collapse navbar-collapse " >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  dual-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link pl-0" href="#" onclick="openNav()">☰</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link pl-0" href="/" >Início <span class="sr-only">Home</span></a>
                </li>


                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Telas de Buscas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pacientes" style="color: #18191A;">Buscar Pacientes</a>
                        <a class="dropdown-item" href="/alunos" style="color: #18191A;">Buscar Alunos</a>
                        <a class="dropdown-item" href="/supervisores" style="color: #18191A;">Buscar Supervisores</a>
                        <a class="dropdown-item" href="/" style="color: #18191A;">Buscar Consultas</a>
                        <a class="dropdown-item" href="/projetos" style="color: #18191A;">Buscar Projetos</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Telas de Cadastros
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pacientes/criar" style="color: #18191A;">Cadastrar Pacientes</a>
                        <a class="dropdown-item" href="/alunos/criar" style="color: #18191A;">Cadastrar Alunos</a>
                        <a class="dropdown-item" href="/supervisores/criar" style="color: #18191A;">Cadastrar Supervisores</a>
                        <a class="dropdown-item" href="/consultas/criar" style="color: #18191A;">Cadastrar Consulta</a>
                        <a class="dropdown-item" href="/projetos/criar" style="color: #18191A;">Cadastrar Projeto</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/PDFTDPacientesCadastrados"target="_blank" style="color: #18191A;">Relatório de Pacientes Ativos</a>
                        <a class="dropdown-item" href="/PDFTDSupervisoresCadastrados"target="_blank" style="color: #18191A;">Relatório de Supervisores Cadastrados</a>
                        <a class="dropdown-item" href="/PDFTDAlunosCadastrados"target="_blank" style="color: #18191A;">Relatório de Alunos Ativos</a>
                        <a class="dropdown-item" href="/PDFTDConsultas2" target="_blank" style="color: #18191A;">Relatório de Consultas</a>
                        <a class="dropdown-item" href="/PDFTDProjetos" target="_blank"style="color: #18191A;">Relatório de Projetos</a>


                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/PDFTDPacientesDeletados"target="_blank" style="color: #18191A;">Relatório de Pacientes em Espera</a>
                        <a class="dropdown-item" href="/PDFTDSupervisoresDeletados"target="_blank" style="color: #18191A;">Relatório de Supervisores Deletados</a>
                        <a class="dropdown-item" href="/PDFTDAlunosDeletados"target="_blank" style="color: #18191A;">Relatório de Alunos em Espera</a>

{{--                                                <div class="dropdown-divider"></div>--}}
{{--                                                <a class="dropdown-item" href="/PDFTDPacientesDownload"target="_blank">Baixar Relatório de Pacientes</a>--}}
{{--                                                <a class="dropdown-item" href="/PDFTDSupervisoresDownload"target="_blank">Baixar Relatório de Supervisores</a>--}}
{{--                                                <a class="dropdown-item" href="/PDFTDAlunosDownload"target="_blank">Baixar Relatório de Alunos</a>--}}
{{--                                                <a class="dropdown-item" href="/PDFTDConsultasDownload" target="_blank">Baixar Relatório de Consultas</a>--}}
                    </div>
                </li>
            </ul>
        </div>
        <a  class="navbar-brand col mx-auto d-block text-center w-100"><h3>@yield('cabecalho')</h3></a>

        <div class="navbar-collapse collapse dual-nav w-100">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" style="color: #18191A;"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="container">
    @yield('conteudo')

</div>



<script src="<?php echo asset('js/jquery_min.js')?>"></script>
<script src="<?php echo asset('js/script.js')?>"></script>
<script src="<?php echo asset('js/validation.js')?>"></script>

{{--Não usar esse caralho--}}
{{--<script src="<?php echo asset('js/slim_min.js')?>"></script>--}}

<script src="<?php echo asset('js/popper_min.js')?>"></script>
<script src="<?php echo asset('js/bootstrap_min.js')?>"></script>
<script src="<?php echo asset('js/fontawesome.js')?>"></script>






</body>

</html>
