<h1>Proyectos</h1>
@foreach ($proyectos as $proyecto)

<li class="media">
    <a class="pull-left" href="#"><img class="media-object" src="{{$proyecto['url_imagen']}}" height="64" width="64"></a>
    <div class="media-body">
        <h4 class="media-heading">{{$proyecto['nombre']}}</h4>
        <p>{{$proyecto['descripcion']}}. 
            <strong> El VAN de este proyecto es: {{$proyecto['van']}} y 
            el TIR: {{$proyecto['tir']}}</strong>, 
            la fecha de inicio: {{$proyecto['fecha_inicio_provable']}} 
            y la fecha de término: {{$proyecto['fecha_termino_provable']}}. 
            <a href="{{$proyecto['enlace_externo']}}">(ver enlace externo)</a>, 
            <a href="/proyectos/{{$proyecto['id']}}">(ver más)</a>
        </p>
        <a href="/proyectos/{{$proyecto['id']}}/nomegusta"><i class="fa fa-3x fa-fw fa-bomb"></i></a>
        <a href="/proyectos/{{$proyecto['id']}}/darconsejo"><i class="fa fa-3x fa-fw fa-ambulance"></i></a>
        <a href="/proyectos/{{$proyecto['id']}}/megusta"><i class="fa fa-3x fa-fw fa-angellist"></i></a>
    </div>
</li>
@endforeach
{!! $proyectos->links() !!}
<a class="btn btn-block btn-primary" href="proyectos">Ver todo</a>