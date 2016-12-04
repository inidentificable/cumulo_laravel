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
    <h1>Paso 1</h1>
    <p>Los Empresarios y Emprendedores pueden crear grupos, ambos comparten en un mismo lugar, pero solo las <strong>Empresas</strong> pueden crear licitaciones y vender sus productos a otros usuarios.
        Los <strong>Emprendedores</strong> del grupo podrán crear proyectos, revisar las licitaciones e interactuar con las empresas.</p>
    @if(Auth::user()->es_empresario == 1)
    <a href="/" class="btn btn-lg btn-success"><i class="fa fa fa-briefcase"></i> Crear el grupo como Empresa</a>
    @endif
    @if(Auth::user()->es_emprendedor == 1)
    <a href="/" class="btn btn-lg btn-success"><i class="fa fa fa-child"></i> Crear el grupo como Emprendedor</a>
    @endif
</div>

<div class="row marketing">
    @if(Auth::user()->es_empresario == 0)
    <div class="col-lg-6">
        <h4>Ser un Empresarios</h4>
        <p>Tal vez quieras registrarte como Empresario antes de continuar con la creación del Grupo, podrás crear licitaciones y vender a otros empresarios y emprendedores.</p>
        <a href="empresas/crear" class="btn btn-block btn-primary"><i class="fa fa fa-briefcase"></i> Inscribete como Empresa</a>
    </div>
    @endif
    @if(Auth::user()->es_emprendedor == 0)
    <div class="col-lg-6">
        <h4>Ser un Emprendedor</h4>
        <p>¡Si eres de las personas que está siempre creando nuevas ideas de negocio podrías necesitar nuestro kit de herramientas para Emprendedores como Tú!</p>
        <a href="emprendedores/crear" class="btn btn-block btn-primary"><i class="fa fa fa-child"></i> Inscribete como Emprendedor</a>
    </div>
    @endif    
</div>
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection