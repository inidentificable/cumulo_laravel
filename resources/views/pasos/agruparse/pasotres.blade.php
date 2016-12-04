@extends('layouts.inicio')

@section('titulo', 'Detalles Proyecto')

@section('barra-lateral')
@parent

@endsection

@section('content')

<div class="header clearfix">
    <h1 class="text-muted">Agruparse</h1>
</div>

<div class="jumbotron">
    <h3>Paso 3</h3>
    <p>Paso 3 y final, seleccionaste la Empresa <strong>{{$empresa['nombre']}}, RUT: {{$empresa['rut']}}</strong>, podras interactuar con tus compañeros de grupo a través de esta empresa.</p>

    @if(Auth::user()->es_empresario == 0 || Auth::user()->es_emprendedor == 0)
    <p>Si llegaste a esta página por error puedes</p>

    @if(Auth::user()->es_empresario == 0)
    <a href="{{ url('empresas/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-briefcase"></i> Inscribete como Empresa</a>
    @endif
    @if(Auth::user()->es_emprendedor == 0)
    <a href="{{ url('emprendedores/crear') }}" class="btn btn-lg btn-success"><i class="fa fa fa-child"></i> Inscribete como Emprendedor</a>
    @endif
    @else
    <p>A continuación, ingresa los datos que identificarán al <strong>Grupo</strong>, se descriptivo para que otras personas entiendan claramente la finalidad de trabajar contigo.</p>
    @endif

</div>

<div class="row marketing">
    @if(Auth::user()->es_empresario == 1)
    <h4>Crear un nuevo grupo</h4>
    <form role="form" action="{{ url('grupos/empresas/crear/'.$empresa->id) }}" method="post">
        <div class="form-group col-md-4">
            <label for="nombre">Nombre del grupo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="Grupo de la empresa {{$empresa['nombre']}}">
        </div>
        <div class="form-group col-md-4">
            <label for="descripcion">Descripción:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="Ingresa una breve explicación que explique la finalidad del grupo">
        </div>
        <div class="form-group col-md-4">
            <label for="caracter_legal">Caracter legal:</label>
             <select name="caracter_legal" class="form-control">
                 <option value="1">Legalizado</option>
                 <option value="0">Informal</option>
             </select>
        </div>
        <div class="form-group col-md-4">
            <label for="rol_personalidad_juridica">Rol personalidad juridica:</label>
            <input type="text" class="form-control" id="rol_personalidad_juridica" name="rol_personalidad_juridica" value="">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="activo" value="1">
        <input type="hidden" name="fecha_creacion" value="{{ Carbon\Carbon::today()->toDateString() }}">
        <input type="hidden" name="fecha_inactivo" value="{{ Carbon\Carbon::today()->toDateString() }}">
        <button type="submit" class="btn btn-block btn-primary">Crear grupo</button>
    </form>
    @endif
</div>
<br>
<a href="{{ url()->previous() }}" class="btn btn-block btn-primary">Volver</a>
@endsection