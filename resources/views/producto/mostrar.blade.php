@extends('layouts.inicio')

@section('titulo', 'Detalles Producto')

@section('barra-lateral')
    @parent

@endsection

@section('content')
    <h1>Detalles de la Producto</h1>
    <form role="form" action="/productos" method="get">
        <div class="form-group col-md-4">
            <label for="id">ID:</label>
            <input type="number" class="form-control" id="id" name="id" value="{{$producto['id']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="codigo">Código:</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{$producto['codigo']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto['nombre']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="marca">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" value="{{$producto['marca']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="descripcion">Descripcion:</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion"
                   value="{{$producto['descripcion']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="medida">Medida:</label>
            <input type="text" class="form-control" id="medida" name="medida" value="{{$producto['medida']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$producto['cantidad']}}"
                   readonly>
        </div>
        <div class="form-group col-md-4">
            <tr>
                <td><img src="{{url().'/storage/'.$producto['codigo'].'-1.jpg'}}" alt="Imágen del producto"
                         style="width:340px;height:160px;"></td>
                <td><img src="{{url().'/storage/'.$producto['codigo'].'-2.jpg'}}" alt="Imágen del producto"
                         style="width:340px;height:160px;"></td>
                <td><img src="{{url().'/storage/'.$producto['codigo'].'-3.jpg'}}" alt="Imágen del producto"
                         style="width:340px;height:160px;"></td>
            </tr>
        </div>
        <div class="form-group col-md-4">
            <label for="precio_minimo">Precio Mínimo</label>
            <input type="number" class="form-control" id="precio_minimo" name="precio_minimo"
                   value="{{$producto['precio_minimo']}}" readonly>
        </div>
        <div class="form-group col-md-4">
            <label for="precio_maximo">Precio Máximo</label>
            <input type="number" class="form-control" id="precio_maximo" name="precio_maximo"
                   value="{{$producto['precio_maximo']}}" readonly>
        </div>
        <button type="submit" class="btn btn-default">Volver</button>
    </form>
@endsection