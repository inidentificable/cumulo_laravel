@extends('layouts.inicio')

@section('titulo', 'Detalles Grupo')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    <h1>Listado de Grupos</h1>
    <p>Lista de todos los grupos ingresadas</p>
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
    {!! $grupos->links() !!}
@endsection