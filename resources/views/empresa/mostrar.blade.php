@extends('layouts.app')

@section('title', 'Detalles Empresa')

@section('sidebar')
    @parent

@endsection

@section('content')
<h1>Detalles de la Empresa</h1>
<form role="form" action="/empresas" method="get">
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$empresa['id']}}" readonly>
    </div>
    <div class="form-group">
        <label for="rut">RUT:</label>
        <input type="text" class="form-control" id="rut" name="rut" value="{{$empresa['rut']}}" readonly>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$empresa['nombre']}}" readonly>
    </div>
    <div class="form-group">
        <label for="fecha_inicio_actividades">Inicio de actividades</label>
        <input type="date" class="form-control" id="fecha_inicio_actividades" name="fecha_inicio_actividades" value="{{$empresa['fecha_inicio_actividades']}}" readonly>
    </div>
    <div class="form-group">
        <label for="fecha_ingreso_sistema">Incorporación</label>
        <input type="date" class="form-control" id="fecha_ingreso_sistema" name="fecha_ingreso_sistema" value="{{$empresa['fecha_ingreso_sistema']}}" readonly>
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$empresa['telefono']}}" readonly>
    </div>
    <div class="form-group">
        <label for="comuna">Comuna</label>
        <input type="text" class="form-control" id="comuna" name="comuna" value="{{$empresa['comuna']}}" readonly>
    </div>
    <div class="form-group">
        <label for="ciudad">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$empresa['ciudad']}}" readonly>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{$empresa['direccion']}}" readonly>
    </div>
    <div class="form-group">
        <label for="pais">Pais</label>
        <input type="text" class="form-control" id="pais" name="pais" value="{{$empresa['pais']}}" readonly>
    </div>
    <div class="form-group">
        <label for="clasificacion">Clasificación</label>
        <input type="text" class="form-control" id="clasificacion" name="clasificacion" value="{{$empresa['clasificacion']}}" readonly>
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection