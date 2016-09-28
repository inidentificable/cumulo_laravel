{{-- El formulario de login --}}
@extends('layouts.inicio')

@section('titulo', 'Login')

@section('autenticacion')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{-- Seguridad contra ataque CSRF --}}
        {{ csrf_field() }}

        {{-- Formulario --}}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">E-Mail Address</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-6">
                <input type="password" class="form-control" name="password">
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">recordarme</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                {{-- Botón login --}}
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i>Ingresar
                </button>
                <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste la contraseña?</a>
                {{-- Botón para registrarse, redirige a formulario de Registro de usuario--}}
                <a class="btn btn-link" href="{{ url('/register') }}">Registrarse</a>
            </div>
        </div>
    </form>
@endsection
