@extends('layouts.inicio')

@section('titulo', 'Detalles Licitacion')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Listado de Licitacions</h1>
<p>Lista de todas las licitacions ingresadas</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID licitacion</th>
            <th>Privada</th>
            <th>Fecha inicio</th>
            <th>Fecha término</th>
            <th>Mínimo ofertas</th>
            <th>Máximo ofertas</th>
            <th>Costo mínimo</th>
            <th>Costo máximo</th>
            <th>Desierta</th>
            <th>Fecha desierta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($licitacions as $licitacion)
        <tr onclick="document.location = '/licitaciones/{{$licitacion['id']}}';">
            <td>{{$licitacion['id']}}</td>
            <td>{{$licitacion['es_privada']}}</td>
            <td>{{$licitacion['fecha_inicio']}}</td>
            <td>{{$licitacion['fecha_termino']}}</td>
            <td>{{$licitacion['minimo_ofertas']}}</td>
            <td>{{$licitacion['maximo_ofertas']}}</td>
            <td>{{$licitacion['costo_minimo']}}</td>
            <td>{{$licitacion['costo_maximo']}}</td>
            <td>{{$licitacion['es_desierta']}}</td>
            <td>{{$licitacion['fecha_desierta']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($licitacions instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $licitacions->links() !!}
@endif
@endsection