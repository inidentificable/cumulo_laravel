@extends('layouts.inicio')

@section('titulo', 'Detalles Grupo')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Listado de Grupos</h1>
<p>Lista de tus grupos activos</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Nombre grupo</th>
            <th>Descripción grupo</th>
            <th>Fecha de creación</th>
            <th>Legalizado</th>
            <th>Rol personalidad jurídica</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupos as $grupo)
        <tr onclick="document.location = '/grupos/{{$grupo['id']}}';">
            <td>{{$grupo['nombre']}}</td>
            <td>{{$grupo['descripcion']}}</td>
            <td>{{$grupo['fecha_creacion']}}</td>
            @if($grupo['caracter_legal']==1)
            <td>{{$grupo['caracter_legal']}}</td>
            <td>{{$grupo['rol_personalidad_juridica']}}</td>
            @else
            <td>grupo informal</td>
            <td>no tiene p.j.</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@if(Auth::user()->es_emprendedor == 1)
<a class="btn btn-block btn-primary" href="grupos/crear">Crear Nuevo Grupo</a>
<a class="btn btn-block btn-primary" href="home_emprendedor">Volver Atras</a>
@endif
@if($grupos instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $grupos->links() !!}
@endif
@endsection