@extends('layouts.inicio')

@section('titulo', 'Detalles Proyecto')

@section('barra-lateral')
@parent

@endsection

@section('content')

<div class="header clearfix">
    <h3 class="text-muted">Agruparse</h3>
</div>

<div class="jumbotron">
    <h1>Paso 2</h1>
    <p>Has decidido registrar tu grupo como un <strong>Empresario</strong>, ¡muy bien!, estarás habilitado para crear proyectos, crear licitaciones, interactuar con otras empresas y usuarios y vender tus productos.</p>
    
    @if(Auth::user()->es_empresario == 0 || Auth::user()->es_emprendedor == 0)
    <p>Si llegaste a esta página por error puedes</p>
    
    @if(Auth::user()->es_empresario == 0)
    <a href="{{ url('empresas/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-briefcase"></i> Inscribete como Empresa</a>
    @endif
    @if(Auth::user()->es_emprendedor == 0)
    <a href="{{ url('emprendedores/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-child"></i> Inscribete como Emprendedor</a>
    @endif
    @else
    <p>A continuación, te mostramos el <strong>listado de las empresas en las que participas</strong> para que selecciones aquella que será creadora del grupo </p>
    @endif
    
</div>

<div class="row marketing">
    @if(Auth::user()->es_empresario == 1)
    @foreach ($empresas as $empresa)
    <div class="col-lg-6">
        <h4>{{$empresa['nombre']}}</h4>
        <p>Puedes crear el grupo a nombre de la empresa {{$empresa['nombre']}} rut {{$empresa['rut']}}, esta empresa está ubicada en {{$empresa['comuna']}}, {{$empresa['pais']}}</p>
        <a href="{{ url('grupos/empresas/crear/'.$empresa->id) }}" class="btn btn-block btn-primary"><i class="fa fa fa-briefcase"></i> Usar {{$empresa['nombre']}}</a>
    </div>
    @endforeach
    @endif
    @if($empresas instanceof \Illuminate\Pagination\LengthAwarePaginator )
    {!! $empresas->links() !!}
    @endif
</div>
<br>
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection