<h1>Mis licitaciones</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Fecha inicio</th>
            <th>Fecha término</th>
            <th>Costo mínimo</th>
            <th>Costo máximo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($licitacions as $licitacion)
        <tr onclick="document.location = '/licitaciones/{{$licitacion['id']}}';">
            <td>{{$licitacion['fecha_inicio']}}</td>
            <td>{{$licitacion['fecha_termino']}}</td>
            <td>{{$licitacion['costo_minimo']}}</td>
            <td>{{$licitacion['costo_maximo']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if($licitacions instanceof \Illuminate\Pagination\LengthAwarePaginator )
{!! $licitacions->links() !!}
@endif
<a class="btn btn-block btn-primary" href="licitaciones">Ver todo</a>