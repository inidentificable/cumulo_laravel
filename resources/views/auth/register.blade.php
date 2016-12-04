{{-- El formulario de registro --}}
@extends('layouts.inicio')

@section('titulo', 'Registro')

@section('autenticacion')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{-- Seguridad contra ataque CSRF --}}
        {{ csrf_field() }}

        {{-- Formulario --}}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Nombre</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Confirme Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-md-4">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Registrarse
                </button>
                {{-- Botón para registrarse, redirige a formulario de Registro de usuario--}}
                <a class="btn btn-link" href="{{ url('/login') }}">Login</a>
            </div>
        </div>
    </form>
@endsection