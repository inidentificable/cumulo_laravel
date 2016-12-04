@extends('layouts.inicio')

@section('titulo', 'Ingresar una grupo')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar una grupo</h1>
    <form role="form" action="/grupos/crear" method="post">
        <div class="form-group col-md-4">
            <label for="nombre">Nombre grupo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{--{{old('nombre')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{--{{old('descripcion')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="fecha_creacion">Fecha de creacion:</label>
            <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{--{{old('fecha_creacion')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="activo">Activo:</label>
            <input type="number" class="form-control" id="activo" name="activo" value="{{--{{old('activo')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="fecha_inactivo">Fecha inactivo:</label>
            <input type="date" class="form-control" id="fecha_inactivo" name="fecha_inactivo" value="{{--{{old('fecha_inactivo')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="caracter_legal">Caracter legal:</label>
            <input type="number" class="form-control" id="caracter_legal" name="caracter_legal" value="{{--{{old('caracter_legal')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="rol_personalidad_juridica">Rol personalidad juridica:</label>
            <input type="text" class="form-control" id="rol_personalidad_juridica" name="rol_personalidad_juridica" value="{{--{{old('rol_personalidad_juridica')}}--}}">
        </div>
        <button type="submit" class="btn btn-default">Crear grupo</button>
    </form>
@endsection