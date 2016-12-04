@extends('layouts.inicio')

@section('titulo', 'Detalles Grupo')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    <h1>Mis Grupos</h1>
    <p>Este es el listado de los grupos en los que participan tus empresas</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID grupo</th>
                <th>Nombre grupo</th>
                <th>Descripción grupo</th>
                <th>Fecha de creación</th>
                <th>Activo</th>
                <th>Fecha inactivo</th>
                <th>Legalizado</th>
                <th>Rol personalidad jurídica</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($grupos as $grupo)
            <tr onclick="document.location = '/grupos/{{$grupo['id']}}';">
                <td>{{$grupo['id']}}</td>
                <td>{{$grupo['nombre']}}</td>
                <td>{{$grupo['descripcion']}}</td>
                <td>{{$grupo['fecha_creacion']}}</td>
                <td>{{$grupo['activo']}}</td>
                <td>{{$grupo['fecha_inactivo']}}</td>
                <td>{{$grupo['caracter_legal']}}</td>
                <td>{{$grupo['rol_personalidad_juridica']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@if($grupos instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $grupos->links() !!}
@endif
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection