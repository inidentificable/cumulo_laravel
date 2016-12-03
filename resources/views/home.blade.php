@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
    @parent
@endsection
@section('content')
    <div class="col-md-12">
        <div class="page-header">
            <h1>Bienvenido a Cúmulo
                <small>{Agrúpate, comparte y crece}</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <img src="https://unsplash.imgix.net/photo-1420708392410-3c593b80d416?w=1024&amp;q=50&amp;fm=jpg&amp;s=db450320d7ee6de66c24c9b0bf2de3c6" class="img-circle img-responsive">
            </a>
            <blockquote>
                <p>Bienvenido</p>
                <footer>{{ Auth::user()->name }}</footer>
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
                                    <a href="proyectos">Licitaciones</a>
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
                                    <a href="proyectos">Mis ofertas</a>
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
