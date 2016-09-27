@extends('layouts.inicio')

@section('titulo', 'Detalles Permiso')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    <h1>Listado de Permisos</h1>
    <p>Lista de todas las permisos ingresadas</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID permiso</th>
                <th>Descripción permiso</th>
                <th>Fecha creación permiso</th>
                <th>Estado</th>
                <th>Fecha desactivación</th>
                <th>Fecha actualización</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($permisos as $permiso)
            <tr onclick="document.location = '/permisos/{{$permiso['id']}}';">
                <td>{{$permiso['id']}}</td>
                <td>{{$permiso['nombre']}}</td>
                <td>{{$permiso['descripcion']}}</td>
                <td>{{$permiso['fecha_creacion']}}</td>
                <td>{{$permiso['estado_activo']}}</td>
                <td>{{$permiso['fecha_desactiva']}}</td>
                <td>{{$permiso['fecha_actualizacion']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $poermisos->links() !!}
@endsection