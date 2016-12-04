@extends('layouts.inicio')

@section('titulo', 'Detalles Oferta')

@section('barra-lateral')
    @parent

@endsection

@section('content')
<h1>Detalles de la Oferta</h1>
<form role="form" action="/ofertas" method="get">
    <div class="form-group col-md-4">
        <label for="id">ID Oferta:</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$oferta['id']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_oferta">Fecha oferta:</label>
        <input type="date" class="form-control" id="fecha_oferta" name="fecha_oferta" value="{{$oferta['fecha_oferta']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="monto_oferta">Monto de la oferta:</label>
        <input type="number" class="form-control" id="monto_oferta" name="monto_oferta" value="{{$oferta['monto_oferta']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="es_aprobada_oferta">Aprobada</label>
        <input type="number" class="form-control" id="es_aprobada_oferta" name="es_aprobada_oferta" value="{{$oferta['es_aprobada_oferta']}}" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_aprobada_oferta">Fecha Aprobación</label>
        <input type="date" class="form-control" id="fecha_aprobada_oferta" name="fecha_aprobada_oferta" value="{{$oferta['fecha_aprobada_oferta']}}" readonly>
    </div>
    <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection