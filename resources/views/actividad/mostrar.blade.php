@extends('layouts.inicio')

@section('titulo', 'Detalles Licitacion')

@section('barra-lateral')
    @parent

@endsection

@section('content')
<h1>Detalles de la Licitacion</h1>
<form role="form" action="/licitaciones" method="get">
    <div class="form-group col-md-4">
        <label for="id">ID licitacion:</label>
        <input type="number" class="form-control" id="id" name="id" min="{{$licitacion['id']}}" max="{{$licitacion['id']}}" value="{{$licitacion['id']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="es_privada">Es privada:</label>
        <input type="number" class="form-control" id="es_privada" name="es_privada" max="1" min="0" value="{{$licitacion['es_privada']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_inicio">Fecha inicio:</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{$licitacion['fecha_inicio']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_termino">Fecha término:</label>
        <input type="date" class="form-control" id="fecha_termino" name="fecha_termino" min="0" max="1" value="{{$licitacion['fecha_termino']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="minimo_ofertas">Mínimo de ofertas:</label>
        <input type="number" class="form-control" id="minimo_ofertas" name="minimo_ofertas" min="1" value="{{$licitacion['minimo_ofertas']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="costo_minimo">Costo mínimo:</label>
        <input type="number" class="form-control" id="costo_minimo" name="costo_minimo" min="1" value="{{$licitacion['costo_minimo']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="costo_maximo">Costo máximo:</label>
        <input type="number" class="form-control" id="costo_maximo" name="costo_maximo" min="1" value="{{$licitacion['costo_maximo']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="es_desierta">Es desierta:</label>
        <input type="number" class="form-control" id="es_desierta" name="es_desierta" min="0" max="1" value="{{$licitacion['es_desierta']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_desierta">Fecha es desierta:</label>
        <input type="date" class="form-control" id="fecha_desierta" name="fecha_desierta" value="{{$licitacion['fecha_desierta']}}" readonly>
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection