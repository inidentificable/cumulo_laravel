@extends('layouts.app')

@section('title', 'Ingresar una estado')

@section('sidebar')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar un estado</h1>
    <form role="form" action="/estados/crear" method="post">
        <div class="form-group">
            <label for="nombre_validador">Nombre validador:</label>
            <input type="text" class="form-control" id="nombre_validador" name="nombre_validador" value="{{--{{old('nombre_validador')}}--}}">
        </div>
        <div class="form-group">
            <label for="aprobado">Aprobado:</label>
            <input type="number" class="form-control" id="aprobado" name="aprobado" value="{{--{{old('aprobado')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_aprobado">Fecha aprobación</label>
            <input type="date" class="form-control" id="fecha_aprobado" name="fecha_aprobado" min="0" max="1" value="{{--{{old('fecha_aprobado')}}--}}">
        </div>
        <div class="form-group">
            <label for="aprovacion_vigente">Aprobación vigente</label>
            <input type="number" class="form-control" id="aprovacion_vigente" name="aprovacion_vigente" value="{{--{{old('aprovacion_vigente')}}--}}">
        </div>
        <button type="submit" class="btn btn-default">Crear estado</button>
    </form>
@endsection