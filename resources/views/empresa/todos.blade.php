@extends('layouts.personalizado')

@section('titulo', 'Detalles Empresa')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    <h1>Listado de Empresas</h1>
    <p>Lista de todas las empresas ingresadas</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Inicio de Actividades</th>
                <th>Ingreso al Sistema</th>
                <th>Teléfono</th>
                <th>Comuna</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Pais</th>
                <th>Clasificación</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($empresas as $empresa)
            <tr onclick="document.location = '/empresas/{{$empresa['id']}}';">
                <td>{{$empresa['id']}}</td>
                <td>{{$empresa['rut']}}</td>
                <td>{{$empresa['nombre']}}</td>
                <td>{{$empresa['fecha_inicio_actividades']}}</td>
                <td>{{$empresa['fecha_ingreso_sistema']}}</td>
                <td>{{$empresa['telefono']}}</td>
                <td>{{$empresa['comuna']}}</td>
                <td>{{$empresa['ciudad']}}</td>
                <td>{{$empresa['direccion']}}</td>
                <td>{{$empresa['pais']}}</td>
                <td>{{$empresa['clasificacion']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $empresas->links() !!}
@endsection