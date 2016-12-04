@extends('layouts.inicio')

@section('titulo', 'Detalles Proyecto')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Detalles del Proyecto</h1>
<form role="form" action="/proyectos/{{$proyecto['id']}}/actualizar" method="post">
    <div class="form-group col-md-4">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$proyecto['nombre']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="descripcion">Descripción:</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{$proyecto['descripcion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="url_imagen">URL Imágen:</label>
        <input type="text" class="form-control" id="url_imagen" name="url_imagen" value="{{$proyecto['url_imagen']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="link_externo">Enlace externo:</label>
        <input type="text" class="form-control" id="link_externo" name="link_externo" value="{{$proyecto['link_externo']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="esta_activo">Activo:</label>
        <input type="number" class="form-control" id="esta_activo" name="esta_activo" min="0" max="1" value="{{$proyecto['esta_activo']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_desactiva">Fecha desactivado:</label>
        <input type="date" class="form-control" id="fecha_desactiva" name="fecha_desactiva" value="{{$proyecto['fecha_desactiva']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_creacion">Fecha creado:</label>
        <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{$proyecto['fecha_creacion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_inicio_provable">Fecha inicio estimada:</label>
        <input type="date" class="form-control" id="fecha_inicio_provable" name="fecha_inicio_provable" value="{{$proyecto['fecha_inicio_provable']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_inicio_real">Fecha inicio real:</label>
        <input type="date" class="form-control" id="fecha_inicio_real" name="fecha_inicio_real" value="{{$proyecto['fecha_inicio_real']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_termino_provable">Fecha termino estimado:</label>
        <input type="date" class="form-control" id="fecha_termino_provable" name="fecha_termino_provable" value="{{$proyecto['fecha_termino_provable']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="fecha_termino_real">Fecha termino real:</label>
        <input type="date" class="form-control" id="fecha_termino_real" name="fecha_termino_real" value="{{$proyecto['fecha_termino_real']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="tir">TIR:</label>
        <input type="number" step="0.01" class="form-control" id="tir" name="tir" min="0" max="1" value="{{$proyecto['tir']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="tasa_exigida_pesimista">Tasa pesimista:</label>
        <input type="number" step="0.01" class="form-control" id="tasa_exigida_pesimista" name="tasa_exigida_pesimista" min="0" max="1" value="{{$proyecto['tasa_exigida_pesimista']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="tasa_exigida_moderada">Tasa moderada:</label>
        <input type="number" step="0.01" class="form-control" id="tasa_exigida_moderada" name="tasa_exigida_moderada" min="0" max="1" value="{{$proyecto['tasa_exigida_moderada']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="tasa_exigida_optimista">Tasa optimista:</label>
        <input type="number" step="0.01" class="form-control" id="tasa_exigida_optimista" name="tasa_exigida_optimista" min="0" max="1" value="{{$proyecto['tasa_exigida_optimista']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="van">VAN:</label>
        <input type="number" step="0.01" class="form-control" id="van" name="van" min="0" max="1" value="{{$proyecto['van']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="presupuesto_inicial">Presupuesto inicial:</label>
        <input type="number" class="form-control" id="presupuesto_inicial" name="presupuesto_inicial" min="1" value="{{$proyecto['presupuesto_inicial']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="presupuesto_licitado">Presupuesto licitado:</label>
        <input type="number" class="form-control" id="presupuesto_licitado" name="presupuesto_licitado" min="1" value="{{$proyecto['presupuesto_licitado']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="presupuesto_aprobado">Presupuesto aprobado:</label>
        <input type="number" class="form-control" id="presupuesto_aprobado" name="presupuesto_aprobado" min="1" value="{{$proyecto['presupuesto_aprobado']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="minimo_socios">Mínimo de socios:</label>
        <input type="number" class="form-control" id="minimo_socios" name="minimo_socios" min="1" value="{{$proyecto['minimo_socios']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="maximo_socios">Máximo de socios:</label>
        <input type="number" class="form-control" id="maximo_socios" name="maximo_socios" min="1" value="{{$proyecto['maximo_socios']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="capital_minimo_participacion">Capital mínimo participación:</label>
        <input type="number" class="form-control" id="capital_minimo_participacion" name="capital_minimo_participacion" min="1" value="{{$proyecto['capital_minimo_participacion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="capital_maximo_participacion">Capital máximo participación:</label>
        <input type="number" class="form-control" id="capital_maximo_participacion" name="capital_maximo_participacion" min="1" value="{{$proyecto['capital_maximo_participacion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="porcentaje_minimo_participacion">Porcentaje mínimo participación:</label>
        <input type="number" step="0.01" class="form-control" id="porcentaje_minimo_participacion" name="porcentaje_minimo_participacion" min="0" max="1" value="{{$proyecto['porcentaje_minimo_participacion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <div class="form-group col-md-4">
        <label for="porcentaje_maximo_participacion">Porcentaje máximo participacion:</label>
        <input type="number" step="0.01" class="form-control" id="porcentaje_maximo_participacion" name="porcentaje_maximo_participacion" value="{{$proyecto['porcentaje_maximo_participacion']}}" onClick="this.readOnly = false" readonly>
    </div>
    <input type="hidden" name="id" value="{{$proyecto['id']}}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="button" class="btn btn-default" onclick="location.href ='{{url('home')}}'">Volver</button>
    <button type="submit" class="btn btn-default">Guardar Cambios</button>
</form>
@endsection