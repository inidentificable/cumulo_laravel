@extends('layouts.master')

@section('title', 'Detalles Permiso')

@section('sidebar')
    @parent

@endsection

@section('content')
<h1>Detalles de la Permiso</h1>
<form role="form" action="/permisos" method="get">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$permiso['nombre']}}" readonly>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$permiso['descripcion']}}" readonly>
    </div>
    <div class="form-group">
        <label for="fecha_creacion">Fecha de creación:</label>
        <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{$permiso['fecha_creacion']}}" readonly>
    </div>
    <div class="form-group">
        <label for="estado_activo">Estado activo:</label>
        <input type="number" class="form-control" id="estado_activo" name="estado_activo" min="0" max="1" value="{{$permiso['estado_activo']}}" readonly>
    </div>
    <div class="form-group">
        <label for="fecha_desactiva">Fecha desactivación:</label>
        <input type="date" class="form-control" id="fecha_desactiva" name="fecha_desactiva" value="{{$permiso['fecha_desactiva']}}" readonly>
    </div>
    <div class="form-group">
        <label for="fecha_actualizacion">Fecha actualización:</label>
        <input type="date" class="form-control" id="fecha_actualizacion" name="fecha_actualizacion" value="{{$permiso['fecha_actualizacion']}}" readonly>
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection