@extends('layouts.inicio')

@section('titulo', 'Detalles Oferta')

@section('barra-lateral')
    @parent

@endsection

@section('content')
<h1>Detalles del Grupo</h1>
<form role="form" action="/grupos" method="get">
    <div class="form-group col-md-4">
        <label for="id">ID grupo:</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$grupo['id']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="nombre">Nombre grupo:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$grupo['nombre']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$grupo['descripcion']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_creacion">Fecha de creacion:</label>
        <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{$grupo['fecha_creacion']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="activo">Activo:</label>
        <input type="number" class="form-control" id="activo" name="activo" value="{{$grupo['activo']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_inactivo">Fecha inactivo:</label>
        <input type="date" class="form-control" id="fecha_inactivo" name="fecha_inactivo" value="{{$grupo['fecha_inactivo']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="caracter_legal">Caracter legal:</label>
        <input type="number" class="form-control" id="caracter_legal" name="caracter_legal" value="{{$grupo['caracter_legal']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="rol_personalidad_juridica">Rol personalidad juridica:</label>
        <input type="text" class="form-control" id="rol_personalidad_juridica" name="rol_personalidad_juridica" value="{{$grupo['rol_personalidad_juridica']}}" readonly>
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection