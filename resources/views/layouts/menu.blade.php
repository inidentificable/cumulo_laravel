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
                    <a href="{{ url('/') }}">INICIO</a>
                </li>

                {{--¿El usuario está autenticado?--}}
                @if (Auth::check())
                    <li>
                        <a href="{{ url('mercados') }}">MERCADO</a>
                    </li>
                    <li>
                        <a href="{{ url('grupos') }}">GRUPOS</a>
                    </li>
                    <li>
                        <a href="{{ url('proyectos') }}">PROYECTOS</a>
                    </li>
                    <li>
                        <a href="{{ url('licitaciones') }}">LICITACIONES</a>
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
                            <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-sign-out"></i> Editar perfil</a></li>
                            <li><a href="{{ url('/') }}"><i class="fa fa-btn fa-sign-out"></i> Invitaciones</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Salir</a></li>
                            @if(Auth::user()->es_emprendedor == 1)
                                <li><a href="{{ url('/home_emprendedor') }}"><i class="fa fa-btn fa-child"></i> Emprendedor</a></li>
                            @endif
                            @if(Auth::user()->es_empresario == 1)
                                <li><a href="{{ url('/home_empresario') }}"><i class="fa fa-btn fa-briefcase"></i> Empresario</a></li>
                            @endif
                            @if(Auth::user()->es_inversionista == 1)
                                <li><a href="{{ url('/home_inversionista') }}"><i class="fa fa-btn fa-university"></i> Inversionista</a></li>
                            @endif
                            @if(Auth::user()->es_incubadora == 1)
                                <li><a href="{{ url('/home_incubadora') }}"><i class="fa fa-btn fa-diamond"></i> Incubadora</a></li>
                            @endif
                            @if(Auth::user()->es_interno == 1)
                                <li><a href="{{ url('/home_interno') }}"><i class="fa fa-btn fa-key"></i> Interno</a></li>
                            @endif
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ url('quienes') }}">¿QUIÉNES SOMOS?</a>
                    </li>
                    <li>
                        <a href="{{ url('beneficios') }}">BENEFICIOS</a>
                    </li>
                    <li>
                        <a href="{{ url('demo') }}">DEMOSTRACIÓN</a>
                    </li>
                    <li>
                        <a href="{{ url('clientes') }}">CLIENTES</a>
                    </li>
                    <li>
                        <a href="{{ url('contacto') }}">CONTACTO</a>
                    </li>
                    <li>
                        <a href="{{ url('ayuda') }}">AYUDA</a>
                    </li>
                    <li>
                        <a href="#"> | </a>
                    </li>
                    {{--No está autenticado, muestro link de reemplazo del saludo--}}
                    <li>
                        <a href="{{ url('/') }}">CÚMULO</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>