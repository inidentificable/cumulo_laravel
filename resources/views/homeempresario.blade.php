@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
    @parent
@endsection
@section('content')
    <div class="col-md-12">
        <div class="page-header">
            <h1><i class="fa fa-briefcase" aria-hidden="true"></i> Bienvenido Empresario
                <small>{Agrúpate, comparte y crece}</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <img src="{{ Auth::user()->url_imagen }}" class="img-circle img-responsive">
            </a>
            <blockquote>
                <p>Bienvenido {{ Auth::user()->name }}: {{ Auth::user()->bio }}</footer>
                <footer>plataforma.cumulo.cl</footer>
            </blockquote>
            @include('actividad.minitabla')
            
        </div>
        <div class="col-md-8">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="grupos">Agrúpate</a>
                                    <span class="badge">42</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="proyectos">Proyetos</a>
                                    <span class="badge">5</span>
                                </li>
                                <li class="list-group-item">
                                    <a href="licitaciones">Licitaciones</a>
                                    <span class="badge">7</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            @include('licitacion.minitabla')
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="ofertas">Mis ofertas</a>
                                    <span class="badge">3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            @include('oferta.minitabla')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
