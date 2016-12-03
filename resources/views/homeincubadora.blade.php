@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
@parent
@endsection
@section('content')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="fa fa-diamond" aria-hidden="true"></i> Bienvenido Evaluador
            <small>{Buscar nuevas ideas}</small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <a href="#">
            <img src="{{ Auth::user()->url_imagen }}" class="img-circle img-responsive">
        </a>
        <blockquote>
            <p>Bienvenido {{ Auth::user()->name }}: {{ Auth::user()->bio }}</footer>
            <footer>plataforma.cumulo.cl</footer>
        </blockquote>
        <ul class="list-group">
            <li class="list-group-item">Mi Cúmulo</li>
            <li class="list-group-item">Patrocinar proyecto</li>
            <li class="list-group-item">Buscar nuevas ideas</li>
        </ul>

    </div>
    <div class="col-md-8">
        <ul class="media-list">
            @include('proyecto.minitabla')
        </ul>
    </div>
    @endsection
