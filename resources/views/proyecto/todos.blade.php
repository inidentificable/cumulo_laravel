@extends('layouts.inicio')

@section('titulo', 'Detalles Proyecto')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Listado de Proyectos</h1>
<p>Lista de todos los proyectos ingresadas</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Esta activo</th>
            <th>Fecha desactiva</th>
            <th>Fecha creacion</th>
            <th>Fecha inicio provable</th>
            <th>Fecha inicio real</th>
            <th>Fecha termino provable</th>
            <th>Fecha termino real</th>
            <th>TIR</th>
            <th>Tasa pesimista</th>
            <th>Tasa moderada</th>
            <th>Tasa optimista</th>
            <th>VAN</th>
            <th>Presupuesto inicial</th>
            <th>Presupuesto licitado</th>
            <th>Presupuesto aprobado</th>
            <th>Mínimo socios</th>
            <th>Máximo socios</th>
            <th>Capital mínimo participacion</th>
            <th>Capital máximo participacion</th>
            <th>Porcentaje mínimo participacion</th>
            <th>Porcentaje máximo participacion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proyectos as $proyecto)
        <tr onclick="document.location = '/proyectos/{{$proyecto['id']}}';">
            <td>{{$proyecto['id']}}</td>
            <td>{{$proyecto['nombre']}}</td>
            <td>{{$proyecto['esta_activo']}}</td>
            <td>{{$proyecto['fecha_desactiva']}}</td>
            <td>{{$proyecto['fecha_creacion']}}</td>
            <td>{{$proyecto['fecha_inicio_provable']}}</td>
            <td>{{$proyecto['fecha_inicio_real']}}</td>
            <td>{{$proyecto['fecha_termino_provable']}}</td>
            <td>{{$proyecto['fecha_termino_real']}}</td>
            <td>{{$proyecto['tir']}}</td>
            <td>{{$proyecto['tasa_exigida_pesimista']}}</td>
            <td>{{$proyecto['tasa_exigida_moderada']}}</td>
            <td>{{$proyecto['tasa_exigida_optimista']}}</td>
            <td>{{$proyecto['van']}}</td>
            <td>{{$proyecto['presupuesto_inicial']}}</td>
            <td>{{$proyecto['presupuesto_licitado']}}</td>
            <td>{{$proyecto['presupuesto_aprobado']}}</td>
            <td>{{$proyecto['minimo_socios']}}</td>
            <td>{{$proyecto['maximo_socios']}}</td>
            <td>{{$proyecto['capital_minimo_participacion']}}</td>
            <td>{{$proyecto['capital_maximo_participacion']}}</td>
            <td>{{$proyecto['porcentaje_minimo_participacion']}}</td>
            <td>{{$proyecto['porcentaje_maximo_participacion']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($proyectos instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $proyectos->links() !!}
@endif
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection