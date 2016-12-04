@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
@parent
@endsection
@section('content')
<div class="col-md-12">
    <div class="page-header">
        <h1><i class="fa fa-child" aria-hidden="true"></i> Bienvenido Emprendedor
            <small>{Organiza tus ideas, crea tus proyectos}</small>
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
            <li class="list-group-item">
                <a href="misgruposemprendedor">Agrúpate</a>
            </li>
            <li class="list-group-item">
                <a href="proyectos">Comparte</a>
            </li>
            <li class="list-group-item">
                <a href="empresas/crear">Crece</a>
            </li>
        </ul>

    </div>
    <div class="col-md-8">
        <ul class="media-list">
            @include('proyecto.minitabla')
        </ul>
    </div>
    @endsection
