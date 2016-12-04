@extends('layouts.inicio')

@section('titulo', 'Detalles Proyecto')

@section('barra-lateral')
@parent

@endsection

@section('content')

<div class="header clearfix">
    <h1 class="text-muted">Agruparse</h1>
</div>

<div class="jumbotron">
    <h3>Paso 4</h3>
    <p>Felicitaciones {{$usuario->nombre}} has creado el grupo <strong>{{$grupo->nombre}}</strong>, en nombre de tu empresa {{$empresa->nombre}}, RUT {{$empresa->rut}}, ya estas habilitado para crear proyectos, crear licitaciones, interactuar con otras empresas y usuarios y vender tus productos.</p>
    
    @if(Auth::user()->es_empresario == 0 || Auth::user()->es_emprendedor == 0)
    <p>Si llegaste a esta página por error puedes</p>
    
    @if(Auth::user()->es_empresario == 0)
    <a href="{{ url('empresas/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-briefcase"></i> Inscribete como Empresa</a>
    @endif
    @if(Auth::user()->es_emprendedor == 0)
    <a href="{{ url('emprendedores/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-child"></i> Inscribete como Emprendedor</a>
    @endif
    @endif
    
    <p>Ahora podrías continuar con la creación de un <strong>proyecto u una licitación</strong>, revisa en detalle para que sirve cada uno de ellos:</p>
    
</div>

<div class="row marketing">
    <div class="col-lg-6">
        <h4>Crear un Proyecto</h4>
        <p>Los grupos pueden crear proyectos con la finalidad de ocuparse de una oportunidad de mercado en particular, por ejemplo "Fiesta de Navidad Empresas Cúmulos"</p>
        <p>De esta forma los participantes del grupo se ponen de acuerdo en un presupuesto y una repartición de las ganancias de acuerdo al aporte de cada uno.</p>
        <a href="{{ url('proyectos/crear') }}" class="btn btn-block btn-primary"><i class="fa fa fa-briefcase"></i> Crear un proyecto de grupo</a>
    </div>
    <div class="col-lg-6">
        <h4>Crear una Licitación</h4>
        <p>Cuando el grupo se pone de acuerdo en un proyecto, los participantes podrán crear licitaciones que permiten adquirir los insumos para ejecutar el proyecto.</p>
        <p>De esta manera las licitaciones representan las compras a realizar por cada partida del proyecto, pertenecen a una empresa en relación a un proyecto grupal.</p>
        <a href="{{ url('licitaciones/crear') }}" class="btn btn-block btn-primary"><i class="fa fa fa-briefcase"></i> Crear una licitación</a>
    </div>
</div>
<br>
<a href="{{ url('/') }}" class="btn btn-block btn-primary">Volver al home</a>
@endsection