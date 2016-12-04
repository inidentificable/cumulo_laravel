@extends('layouts.inicio')

@section('titulo', 'Detalles Producto')

@section('barra-lateral')
@parent

@endsection

@section('content')
<h1>Listado de Productos</h1>
<p>Lista de todas las productos ingresadas</p>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Medida</th>
            <th>Cantidad</th>
            <th>Foto 1</th>
            <th>Foto 2</th>
            <th>Foto 3</th>
            <th>Precio mínimo</th>
            <th>Precio máximo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr onclick="document.location = '/productos/{{$producto['id']}}';">
            <td>{{$producto['id']}}</td>
            <td>{{$producto['codigo']}}</td>
            <td>{{$producto['nombre']}}</td>
            <td>{{$producto['marca']}}</td>
            <td>{{$producto['descripcion']}}</td>
            <td>{{$producto['medida']}}</td>
            <td>{{$producto['cantidad']}}</td>
            <td><img src="{{url().'/storage/'.$producto['codigo'].'-1.jpg'}}" alt="Imágen del producto"
                     style="width:340px;height:160px;"></td>
            <td><img src="{{url().'/storage/'.$producto['codigo'].'-1.jpg'}}" alt="Imágen del producto"
                     style="width:340px;height:160px;"></td>
            <td><img src="{{url().'/storage/'.$producto['codigo'].'-1.jpg'}}" alt="Imágen del producto"
                     style="width:340px;height:160px;"></td>
            <td>{{$producto['precio_minimo']}}</td>
            <td>{{$producto['precio_maximo']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($productos instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $productos->links() !!}
@endif
@endsection