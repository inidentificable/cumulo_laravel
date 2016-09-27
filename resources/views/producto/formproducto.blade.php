@extends('layouts.inicio')

@section('titulo', 'Ingresar una producto')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    @include('common.errors')
    <h1>Ingresar una producto</h1>
    <form role="form" action="/productos/crear" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="codigo">Código producto:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="--}}{{--{{old('codigo')}}--}}">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre del producto:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="--}}{{--{{old('nombre')}}--}}">
        </div>
        {{--<div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" min="0" max="1" value="--}}{{--{{old('marca')}}--}}{{--">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="--}}{{--{{old('descripcion')}}--}}{{--">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="--}}{{--{{old('cantidad')}}--}}{{--">
        </div>--}}
        <div class="form-group">
            <label for="foto1">Foto 1:</label>
            <input type="file" class="form-control" id="foto1" name="foto1">
        </div>
        {{--<div class="form-group">
            <label for="foto2">Foto 2:</label>
            <input type="file" class="form-control" id="foto2" name="foto2" value="--}}{{--{{old('foto2')}}--}}{{--">
        </div>
        <div class="form-group">
            <label for="foto3">Foto 3:</label>
            <input type="file" class="form-control" id="foto3" name="foto3" value="--}}{{--{{old('foto3')}}--}}{{--">
        </div>
        <div class="form-group">
            <label for="precio_minimo">Precio mínimo:</label>
            <input type="number" class="form-control" id="precio_minimo" name="precio_minimo" value="--}}{{--{{old('precio_minimo')}}--}}{{--">
        </div>
        <div class="form-group">
            <label for="precio_maximo">Precio máximo:</label>
            <input type="number" class="form-control" id="precio_maximo" name="precio_maximo" value="--}}{{--{{old('precio_maximo')}}--}}{{--">
        </div>--}}
        <button type="submit" class="btn btn-default">Crear producto</button>
    </form>
@endsection