@extends('layouts.master')

@section('title', 'Detalles Estado')

@section('sidebar')
    @parent

@endsection

@section('content')
<h1>Detalles del Estado</h1>
<form role="form" action="/estados" method="get">
    <div class="form-group">
        <label for="id">ID estado:</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$estado['id']}}">
    </div>
    <div class="form-group">
        <label for="nombre_validador">Nombre validador:</label>
        <input type="text" class="form-control" id="nombre_validador" name="nombre_validador" value="{{$estado['nombre_validador']}}">
    </div>
    <div class="form-group">
        <label for="aprobado">Aprobado:</label>
        <input type="number" class="form-control" id="aprobado" name="aprobado" value="{{$estado['aprobado']}}">
    </div>
    <div class="form-group">
        <label for="fecha_aprobado">Fecha aprobación</label>
        <input type="date" class="form-control" id="fecha_aprobado" name="fecha_aprobado" min="0" max="1" value="{{$estado['fecha_aprobado']}}">
    </div>
    <div class="form-group">
        <label for="aprovacion_vigente">Aprobación vigente</label>
        <input type="number" class="form-control" id="aprovacion_vigente" name="aprovacion_vigente" value="{{$estado['aprovacion_vigente']}}">
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection