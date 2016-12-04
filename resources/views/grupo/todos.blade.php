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
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($grupos as $grupo)
        <tr onclick="document.location = 'grupos/{{$grupo['id']}}';">
            <td>{{$grupo['nombre']}}</td>
            <td>{{$grupo['descripcion']}}</td>
            <td>{{$grupo['fecha_creacion']}}</td>
            @if($grupo['caracter_legal']==1)
            <td>Grupo Formal</td>
            <td>{{$grupo['rol_personalidad_juridica']}}</td>
            @else
            <td>Grupo Informal</td>
            <td>Sin P.J.</td>
            @endif
            <td>
                @if(Auth::user()->es_emprendedor == 1 || Auth::user()->es_empresario == 1)
                <a class="btn btn-block btn-primary" href="grupos/unirme">Salir del Grupo</a>
                <a class="btn btn-block btn-primary" href="grupos/{{$grupo['id']}}">Editar Grupo</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if(Auth::user()->es_emprendedor == 1 || Auth::user()->es_empresario == 1)
<a class="btn btn-block btn-primary" href="grupos/unirme">Unirme a un Grupo</a>
<a class="btn btn-block btn-primary" href="grupos/crear">Crear Nuevo Grupo</a>
@endif
@if($grupos instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $grupos->links() !!}
@endif
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection