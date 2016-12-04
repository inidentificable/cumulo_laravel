@extends('layouts.inicio')

@section('titulo', 'Detalles Estado')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Listado de Estados</h1>
<p>Lista de todos los estados ingresados</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID estado</th>
            <th>Nombre validador</th>
            <th>Documentacion entregada</th>
            <th>Aprobado</th>
            <th>Fecha aprobación</th>
            <th>Aprobación vigente</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estados as $estado)
        <tr onclick="document.location = '/estados/{{$estado['id']}}';">
            <td>{{$estado['id']}}</td>
            <td>{{$estado['nombre_validador']}}</td>
            <td>{{$estado['documentacion_entregada']}}</td>
            <td>{{$estado['aprobado']}}</td>
            <td>{{$estado['fecha_aprobado']}}</td>
            <td>{{$estado['aprovacion_vigente']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@if($estados instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $estados->links() !!}
@endif
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection