<h1>Mis Ofertas</h1>
<table class="table table-hover">
<thead>
<tr>
    <th>ID oferta</th>
    <th>Fecha oferta</th>
    <th>Monto oferta</th>
    <th>Aprobada</th>
    <th>Fecha aprobación</th>
</tr>
</thead>
<tbody>
@foreach ($ofertas as $oferta)
    <tr onclick="document.location = '/ofertas/{{$oferta['id']}}';">
        <td>{{$oferta['id']}}</td>
        <td>{{$oferta['fecha_oferta']}}</td>
        <td>{{$oferta['monto_oferta']}}</td>
        <td>{{$oferta['es_aprobada_oferta']}}</td>
        <td>{{$oferta['fecha_aprobada_oferta']}}</td>
    </tr>
@endforeach
</tbody>
</table>
{!! $ofertas->links() !!}
<a class="btn btn-block btn-primary" href="ofertas">Ver todo</a>