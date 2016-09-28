@extends('layouts.inicio')

@section('titulo', 'Home')

@section('barra-lateral')
    @parent
@endsection
@section('content')
    <div class="col-md-12">
        <div class="page-header">
            <h1>Bienvenido a Cúmulo
                <small>{Agrúpate, comparte y crece}</small>
            </h1>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="#"><img
                        src="https://unsplash.imgix.net/photo-1420708392410-3c593b80d416?w=1024&amp;q=50&amp;fm=jpg&amp;s=db450320d7ee6de66c24c9b0bf2de3c6"
                        class="img-circle img-responsive"></a>
            <blockquote>
                <p>Bienvenido</p>
                <footer>{{ Auth::user()->name }}</footer>
            </blockquote>
            <h1>Mis actividades</h1>
            <ul class="media-list">
                <li class="media">
                    <a class="pull-left" href="#"><img class="media-object"
                                                       src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?w=1024&amp;q=50&amp;fm=jpg&amp;s=cfeadbd7a991e58b553bee29a7eeca55"
                                                       height="64" width="64"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                            tempus viverra turpis.</p>
                    </div>
                </li>
                <li class="media">
                    <a class="pull-left" href="#"><img class="media-object"
                                                       src="https://unsplash.imgix.net/photo-1423439793616-f2aa4356b37e?w=1024&amp;q=50&amp;fm=jpg&amp;s=3b42f9c018b2712544debf4d6a4998ff"
                                                       height="64" width="64"></a>
                    <div class="media-body">
                        <h4 class="media-heading">Media heading</h4>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                            tempus viverra turpis.</p>
                    </div>
                </li>
            </ul>
            <a class="btn btn-block btn-danger btn-lg">Visitar el mercado</a>
        </div>
        <div class="col-md-8">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="list-group">
                                <li class="list-group-item">Agrúpate
                                    <span class="badge">42</span>
                                </li>
                                <li class="list-group-item">Proyetos</li>
                                <li class="list-group-item">Licitaciones</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h1>Mis licitaciones</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-block btn-primary">Ver todo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <ul class="list-group">
                                <li class="list-group-item">Mis ofertas
                                    <span class="badge">3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h1>Mis ofertas</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                            <a class="btn btn-block btn-primary">Ver todo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
