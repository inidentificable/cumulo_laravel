<h1>Mis actividades</h1>
<ul class="media-list">
    @foreach ($actividades as $actividad)
    <li class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="{{$actividad['url_imagen']}}" height="64" width="64">
        </a>
        <div class="media-body">
            <h4 class="media-heading">{{$actividad['titulo']}}</h4>
            <p onclick="document.location = '/actividades/{{$actividad['id']}}';">
                <strong>{{$actividad['tipo']}}: </strong>{{$actividad['detalle']}}
            </p>
        </div>
    </li>
    @endforeach
</ul>
<a class="btn btn-block btn-primary" href="actividades">Ver todo</a>