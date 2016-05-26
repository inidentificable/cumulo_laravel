<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Agrúpate, comparte y crece con Cúmulo...">
    <meta name="author" content="Cecilia Vergara - Claudio Reyes">
    <link rel="icon" href="{{ asset('assets/imagenes/favico.ico') }}">

    <title>Cúmulo - @yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Cúmulo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}">Ingresar</a></li>
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                @endif
            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Buscar...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @if ( Auth::check() )
            @section('barra-lateral')
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ url('/licitaciones') }}">Mis Licitaciones</a></li>
                    <ul>
                        <li><a href="{{ url('/grupos') }}">Agrupate</a></li>
                        <li><a href="{{ url('/proyectos') }}">Proytectos</a></li>
                        <li><a href="{{ url('/licitaciones') }}">Licitaciones</a></li>
                    </ul>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="{{ url('/ofertas') }}">Mis Ofertas</a></li>
                    <ul>
                        <li><a href="{{ url('/ofertas') }}">Ofertas</a></li>
                    </ul>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="{{ url('/mercado') }}">Mercado</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="{{ url('/invitaciones') }}">Invitaciones</a></li>
                </ul>
            @show
            @endif
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @if ( Auth::check() )
                <h1 class="page-header">@yield('titulo')</h1>
                <div class="row placeholders">
                    @section('graficos')
                        <canvas class="" style="opacity: 1;" id="sitemap" width="320" height="240"></canvas>
                    @show
                </div>

            @else
            @section('carrusel')
            @show
            @endif
            @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/js/jquery.min.js') }}"><\/script>')</script>

<!-- Sirve para implementar los gráficos en javascript, requiere jquery - Libreria-->
<script src="{{ asset('assets/js/arbor.js') }}"></script>
<script src="{{ asset('assets/js/arbor-tween.js') }}"></script>
<script src="{{ asset('assets/js/arbor-graphics.js') }}"></script>
<!-- Sirve para implementar los gráficos en javascript, requiere jquery - Genera el diagrama-->
<script src="{{ asset('assets/js/site.js') }}"></script>


<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ asset('assets/js/vendor/holder.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>