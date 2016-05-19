@extends('layouts.app')

@section('title', 'Ingresar una empresa')

@section('sidebar')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar una empresa</h1>
    <form role="form" action="/empresas/crear" method="post">
        <div class="form-group">
            <label for="fecha_empresa">Fecha empresa:</label>
            <input type="date" class="form-control" id="fecha_empresa" name="fecha_empresa" value="{{--{{old('fecha_empresa')}}--}}">
        </div>
        <div class="form-group">
            <label for="monto_empresa">Monto de la empresa:</label>
            <input type="number" class="form-control" id="monto_empresa" name="monto_empresa" value="{{--{{old('monto_empresa')}}--}}">
        </div>
        <div class="form-group">
            <label for="es_aprobada_empresa">Aprobada</label>
            <input type="number" class="form-control" id="es_aprobada_empresa" name="es_aprobada_empresa" min="0" max="1" value="{{--{{old('es_aprobada_empresa')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_aprobada_empresa">Fecha Aprobación</label>
            <input type="date" class="form-control" id="fecha_aprobada_empresa" name="fecha_aprobada_empresa" value="{{--{{old('fecha_aprobada_empresa')}}--}}">
        </div>
        <button type="submit" class="btn btn-default">Crear empresa</button>
    </form>
@endsection