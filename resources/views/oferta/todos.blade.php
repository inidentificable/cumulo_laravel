@extends('layouts.app')

@section('title', 'Detalles Oferta')

@section('sidebar')
    @parent

@endsection

@section('content')
    <h1>Listado de Ofertas</h1>
    <p>Lista de todas las ofertas ingresadas</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID oferta</th>
                <th>Fecha oferta</th>
                <th>Monto oferta</th>
                <th>Aprobada</th>
                <th>Fecha aprobación</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($ofertas as $oferta)
            <tr onclick="document.location = '/ofertas/{{$oferta['id']}}';">
                <td>{{$oferta['id']}}</td>
                <td>{{$oferta['fecha_oferta']}}</td>
                <td>{{$oferta['monto_oferta']}}</td>
                <td>{{$oferta['es_aprobada_oferta']}}</td>
                <td>{{$oferta['fecha_aprobada_oferta']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection