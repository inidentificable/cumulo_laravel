@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
@parent
@endsection
@section('content')
<div class="col-md-12">
    <div class="page-header">
        <h1>Bienvenido {{ Auth::user()->name }}
            <small>{Ingreso a tus roles}</small>
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
    </div>
    <div class="col-md-8">

        <ul class="list-group">

            @if(Auth::user()->es_emprendedor == 1)
            <li class="list-group-item"><a href="{{ url('/home_emprendedor') }}"><i class="fa fa-child"></i> Emprendedor</a></li>
            @endif
            @if(Auth::user()->es_empresario == 1)
            <li class="list-group-item"><a href="{{ url('/home_empresario') }}"><i class="fa fa-briefcase"></i> Empresario</a></li>
            @endif
            @if(Auth::user()->es_inversionista == 1)
            <li class="list-group-item"><a href="{{ url('/home_inversionista') }}"><i class="fa fa-university"></i> Inversionista</a></li>
            @endif
            @if(Auth::user()->es_incubadora == 1)
            <li class="list-group-item"><a href="{{ url('/home_incubadora') }}"><i class="fa fa-diamond"></i> Incubadora</a></li>
            @endif
            @if(Auth::user()->es_interno == 1)
            <li class="list-group-item"><a href="{{ url('/home_interno') }}"><i class="fa fa-key"></i> Interno</a></li>
            @endif

        </ul>

    </div>

    @endsection
