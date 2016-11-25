@extends('layouts.inicio')

@section('titulo', 'Ingresar una licitacion')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar una licitacion</h1>
    <form role="form" action="/licitaciones/crear" method="post">
        <div class="form-group">
            <label for="es_privada">Es privada:</label>
            <input type="number" class="form-control" id="es_privada" name="es_privada" max="1" min="0" value="{{--{{old('es_privada')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha inicio:</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{--{{old('fecha_inicio')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_termino">Fecha término:</label>
            <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" min="0" max="1" value="{{--{{old('fecha_termino')}}--}}">
        </div>
        <div class="form-group">
            <label for="minimo_ofertas">Mínimo de ofertas:</label>
            <input type="number" class="form-control" id="minimo_ofertas" name="minimo_ofertas" min="1" value="{{--{{old('minimo_ofertas')}}--}}">
        </div>
        <div class="form-group">
            <label for="maximo_ofertas">Máximo de ofertas:</label>
            <input type="number" class="form-control" id="maximo_ofertas" name="maximo_ofertas" min="1" value="{{--{{old('maximo_ofertas')}}--}}">
        </div>
        <div class="form-group">
            <label for="costo_minimo">Costo mínimo:</label>
            <input type="number" class="form-control" id="costo_minimo" name="costo_minimo" min="1" value="{{--{{old('costo_minimo')}}--}}">
        </div>
        <div class="form-group">
            <label for="costo_maximo">Costo máximo:</label>
            <input type="number" class="form-control" id="costo_maximo" name="costo_maximo" min="1" value="{{--{{old('costo_maximo')}}--}}">
        </div>
        <div class="form-group">
            <label for="es_desierta">Es desierta:</label>
            <input type="number" class="form-control" id="es_desierta" name="es_desierta" min="0" max="1" value="{{--{{old('es_desierta')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_desierta">Fecha es desierta:</label>
            <input type="date" class="form-control" id="fecha_desierta" name="fecha_desierta" value="{{--{{old('fecha_desierta')}}--}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Crear licitacion</button>
    </form>
@endsection