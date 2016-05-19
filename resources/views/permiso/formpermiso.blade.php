@extends('layouts.app')

@section('title', 'Ingresar una permiso')

@section('sidebar')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar una permiso</h1>
    <form role="form" action="/permisos/crear" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{--{{old('nombre')}}--}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{--{{old('descripcion')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_creacion">Fecha de creación:</label>
            <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{--{{old('fecha_creacion')}}--}}">
        </div>
        <div class="form-group">
            <label for="estado_activo">Estado activo:</label>
            <input type="number" class="form-control" id="estado_activo" name="estado_activo" min="0" max="1" value="{{--{{old('estado_activo')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_desactiva">Fecha desactivación:</label>
            <input type="date" class="form-control" id="fecha_desactiva" name="fecha_desactiva" value="{{--{{old('fecha_desactiva')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_actualizacion">Fecha actualización:</label>
            <input type="date" class="form-control" id="fecha_actualizacion" name="fecha_actualizacion" value="{{--{{old('fecha_actualizacion')}}--}}">
        </div>
        <button type="submit" class="btn btn-default">Crear permiso</button>
    </form>
@endsection