<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img height="20" alt="Brand" src="..\assets\imagenes\cumulo.jpg"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#">INICIO</a>
                </li>

                {{--¿El usuario está autenticado?--}}
                @if (Auth::check())
                    <li>
                        <a href="#">MERCADO</a>
                    </li>
                    <li>
                        <a href="#">GRUPOS</a>
                    </li>
                    <li>
                        <a href="#">PROYECTOS</a>
                    </li>
                    <li>
                        <a href="#">LICITACIONES</a>
                    </li>
                    <li>
                        <a href="#"> | </a>
                    </li>
                    {{--Si está autenticado, saludo al usuario y genero dropdown para logout--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-sign-out"></i>Editar perfil</a></li>
                            <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-sign-out"></i>Invitaciones</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="#">¿QUIÉNES SOMOS?</a>
                    </li>
                    <li>
                        <a href="#">BENEFICIOS</a>
                    </li>
                    <li>
                        <a href="#">DEMOSTRACIÓN</a>
                    </li>
                    <li>
                        <a href="#">CLIENTES</a>
                    </li>
                    <li>
                        <a href="#">CONTACTO</a>
                    </li>
                    <li>
                        <a href="#">AYUDA</a>
                    </li>
                    <li>
                        <a href="#"> | </a>
                    </li>
                    {{--No está autenticado, muestro link de reemplazo del saludo--}}
                    <li>
                        <a href="#">CÚMULO</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>