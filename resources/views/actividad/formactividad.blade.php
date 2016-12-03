@extends('layouts.inicio')

@section('titulo', 'Ingresar una actividad')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar un registro de actividad</h1>
    <form role="form" action="/actividad/crear" method="post">
        <div class="form-group">
            <label for="es_privada">Título:</label>
            <input type="number" class="form-control" id="titulo" name="titulo" value="{{--{{old('titulo')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Detalle:</label>
            <input type="date" class="form-control" id="detalle" name="detalle" value="{{--{{old('detalle')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_termino">Tipo:</label>
            <input type="date" class="form-control" id="tipo" name="tipo" value="{{--{{old('tipo')}}--}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="fecha_creada" value="{{ Carbon\Carbon::today()->toDateString() }}">
        <input type="hidden" name="revisada" value="FALSE">
        <button type="submit" class="btn btn-default">Crear actividad</button>
    </form>
@endsection