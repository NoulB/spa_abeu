<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">

    <style>

        a:link {
            text-decoration: none;
            color: black;
        }

        body {
            background-color: lightblue;
        }

        #container {
            background-color: white;
        }

        .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            background-color: #e3f2fd;
        }
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
        .linha-retornop{
            margin-bottom: 10px;
            display: block;
            cursor: pointer;

        }
        .linha-retornoa{
            margin-bottom: 10px;
            display: block;
            cursor: pointer;

        }
        .linha-retornos{
            margin-bottom: 10px;
            display: block;
            cursor: pointer;

        }

    </style>
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light justify-content-between" style="background-color: #e3f2fd;">

    <div class="collapse navbar-collapse">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  dual-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link pl-0" href="/">Home <span class="sr-only">Home</span></a>
                </li>
              {{--  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>--}}
               {{-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>--}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alunos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pacientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Supervisores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agendamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
        <a href="#" class="navbar-brand col mx-auto d-block text-center w-100"><h3>@yield('cabecalho')</h3></a>

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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
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

<script src="<?php echo asset('js/validation.js')?>"></script>
<script src="<?php echo asset('js/slim_min.js')?>"></script>
<script src="<?php echo asset('js/popper_min.js')?>"></script>
<script src="<?php echo('js/bootstrap_min.js')?>"></script>
<script src="<?php echo asset('js/fontawesome.js')?>"></script>
<script src="<?php echo asset('js/fontawesome.js')?>"></script>
<script src="<?php echo asset('js/jquery.min.js')?>"></script>


</body>

</html>
