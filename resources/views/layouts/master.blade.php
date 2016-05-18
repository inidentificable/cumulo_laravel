<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='http://localhost/assets/css/bootstrap.css' />
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>
    @section('sidebar')
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">CÚMULO</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Agrupate
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Listar grupos</a></li>
                            <li><a href="#">Agregar grupo</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Proyectos
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Listar Proyectos</a></li>
                            <li><a href="#">Agregar Proyecto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Licitaciones
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Listar Licitaciones</a></li>
                            <li><a href="#">Agregar Licitación</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> Mis ofertas</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Inscribirse</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>
                </ul>
            </div>
        </nav>
    @show

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">

                @yield('content')

            </div>
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>

    @section('footer')
        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>
    @show
    <!-- Scripts -->
    <script src='http://localhost/assets/js/bootstrap.min.js' />

</body>
</html>