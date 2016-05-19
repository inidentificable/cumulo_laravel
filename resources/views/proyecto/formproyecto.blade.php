@extends('layouts.app')

@section('title', 'Ingresar una proyecto')

@section('sidebar')
    @parent

@endsection

@section('content')
    @include('common.errors')
<h1>Ingresar proyecto</h1>
    <form role="form" action="/proyectos/crear" method="post">
        <div class="form-group">
            <label for="nombre">Nombre proyecto:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{--{{old('nombre')}}--}}">
        </div>
        <div class="form-group">
            <label for="esta_activo">Activo:</label>
            <input type="number" class="form-control" id="esta_activo" name="esta_activo" min="0" max="1" value="{{--{{old('esta_activo')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_desactiva">Fecha desactivado:</label>
            <input type="date" class="form-control" id="fecha_desactiva" name="fecha_desactiva" value="{{--{{old('fecha_desactiva')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_creacion">Fecha creado:</label>
            <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" value="{{--{{old('fecha_creacion')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_inicio_provable">Fecha inicio estimada:</label>
            <input type="date" class="form-control" id="fecha_inicio_provable" name="fecha_inicio_provable" value="{{--{{old('fecha_inicio_provable')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_inicio_real">Fecha inicio real:</label>
            <input type="date" class="form-control" id="fecha_inicio_real" name="fecha_inicio_real" value="{{--{{old('fecha_inicio_real')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_termino_provable">Fecha termino estimado:</label>
            <input type="date" class="form-control" id="fecha_termino_provable" name="fecha_termino_provable" value="{{--{{old('fecha_termino_provable')}}--}}">
        </div>
        <div class="form-group">
            <label for="fecha_termino_real">Fecha termino real:</label>
            <input type="date" class="form-control" id="fecha_termino_real" name="fecha_termino_real" value="{{--{{old('fecha_termino_real')}}--}}">
        </div>
        <div class="form-group">
            <label for="tir">TIR:</label>
            <input type="number" step="0.01" class="form-control" id="tir" name="tir" min="0" max="1" value="{{--{{old('tir')}}--}}">
        </div>
        <div class="form-group">
            <label for="tasa_exigida_pesimista">Tasa pesimista:</label>
            <input type="number" step="0.01" class="form-control" id="tasa_exigida_pesimista" name="tasa_exigida_pesimista" min="0" max="1" value="{{--{{old('tasa_exigida_pesimista')}}--}}">
        </div>
        <div class="form-group">
            <label for="tasa_exigida_moderada">Tasa moderada:</label>
            <input type="number" step="0.01" class="form-control" id="tasa_exigida_moderada" name="tasa_exigida_moderada" min="0" max="1" value="{{--{{old('tasa_exigida_moderada')}}--}}">
        </div>
        <div class="form-group">
            <label for="tasa_exigida_optimista">Tasa optimista:</label>
            <input type="number" step="0.01" class="form-control" id="tasa_exigida_optimista" name="tasa_exigida_optimista" min="0" max="1" value="{{--{{old('tasa_exigida_optimista')}}--}}">
        </div>
        <div class="form-group">
            <label for="van">VAN:</label>
            <input type="number" step="0.01" class="form-control" id="van" name="van" min="0" max="1" value="{{--{{old('van')}}--}}">
        </div>
        <div class="form-group">
            <label for="presupuesto_inicial">Presupuesto inicial:</label>
            <input type="number" class="form-control" id="presupuesto_inicial" name="presupuesto_inicial" min="1" value="{{--{{old('presupuesto_inicial')}}--}}">
        </div>
        <div class="form-group">
            <label for="presupuesto_licitado">Presupuesto licitado:</label>
            <input type="number" class="form-control" id="presupuesto_licitado" name="presupuesto_licitado" min="1" value="{{--{{old('presupuesto_licitado')}}--}}">
        </div>
        <div class="form-group">
            <label for="presupuesto_aprobado">Presupuesto aprobado:</label>
            <input type="number" class="form-control" id="presupuesto_aprobado" name="presupuesto_aprobado" min="1" value="{{--{{old('presupuesto_aprobado')}}--}}">
        </div>
        <div class="form-group">
            <label for="minimo_socios">Mínimo de socios:</label>
            <input type="number" class="form-control" id="minimo_socios" name="minimo_socios" min="1" value="{{--{{old('minimo_socios')}}--}}">
        </div>
        <div class="form-group">
            <label for="maximo_socios">Máximo de socios:</label>
            <input type="number" class="form-control" id="maximo_socios" name="maximo_socios" min="1" value="{{--{{old('maximo_socios')}}--}}">
        </div>
        <div class="form-group">
            <label for="capital_minimo_participacion">Capital mínimo participación:</label>
            <input type="number" class="form-control" id="capital_minimo_participacion" name="capital_minimo_participacion" min="1" value="{{--{{old('capital_minimo_participacion')}}--}}">
        </div>
        <div class="form-group">
            <label for="capital_maximo_participacion">Capital máximo participación:</label>
            <input type="number" class="form-control" id="capital_maximo_participacion" name="capital_maximo_participacion" min="1" value="{{--{{old('capital_maximo_participacion')}}--}}">
        </div>
        <div class="form-group">
            <label for="porcentaje_minimo_participacion">Porcentaje mínimo participación:</label>
            <input type="number" step="0.01" class="form-control" id="porcentaje_minimo_participacion" name="porcentaje_minimo_participacion" min="0" max="1" value="{{--{{old('porcentaje_minimo_participacion')}}--}}">
        </div>
        <div class="form-group">
            <label for="porcentaje_maximo_participacion">Porcentaje máximo participacion:</label>
            <input type="number" step="0.01" class="form-control" id="porcentaje_maximo_participacion" name="porcentaje_maximo_participacion" value="{{--{{old('porcentaje_maximo_participacion')}}--}}">
        </div>
        <button type="submit" class="btn btn-default">Crear proyecto</button>
    </form>
@endsection