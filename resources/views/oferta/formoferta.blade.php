@extends('layouts.inicio')

@section('titulo', 'Ingresar una oferta')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar una oferta</h1>
    <form role="form" action="/ofertas/crear" method="post">
        <div class="form-group col-md-4">
            <label for="fecha_oferta">Fecha oferta:</label>
            <input type="date" class="form-control" id="fecha_oferta" name="fecha_oferta" value="{{--{{old('fecha_oferta')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="monto_oferta">Monto de la oferta:</label>
            <input type="number" class="form-control" id="monto_oferta" name="monto_oferta" value="{{--{{old('monto_oferta')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="es_aprobada_oferta">Aprobada</label>
            <input type="number" class="form-control" id="es_aprobada_oferta" name="es_aprobada_oferta" min="0" max="1" value="{{--{{old('es_aprobada_oferta')}}--}}">
        </div>
        <div class="form-group col-md-4">
            <label for="fecha_aprobada_oferta">Fecha Aprobación</label>
            <input type="date" class="form-control" id="fecha_aprobada_oferta" name="fecha_aprobada_oferta" value="{{--{{old('fecha_aprobada_oferta')}}--}}">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-block btn-primary">Crear oferta</button>
    </form>
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection