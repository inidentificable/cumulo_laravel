@extends('layouts.personalizado')

@section('titulo', 'Home')

@section('barra-lateral')
    @parent
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    Bienvenid@ a casa, ya estas en las Nubes!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
