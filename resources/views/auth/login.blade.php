@extends('layouts.login')
@section('title', 'Login')

@section('content')
{!! Form::open(['method' => 'POST',  'url' => url('login'), 'class' => 'form-signin'] ) !!}
    <div class="content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Iniciar Sesión</h4>
                            <p class="category">Ten a la mano contraseña y email</p>
                        </div>
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contraseña</label>
                                            <input type="password" name="password" id="password" class="form-control" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn col-md-12 col-sm-12 col-xs-12 btn-success pull-right">Iniciar Sesión</button>

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <a href="{{ url('register') }}" style="background-color: #fb8c00;" class="btn col-md-12 col-sm-12 col-xs-12 btn-warning pull-right">Registrate</a><br><br>
                                </div>
                                <div class="clearfix"></div>

                                <div class="row" style="margin-top: 10px;">
                                    <br>
                                    <div class="col-sm-12 text-center">
                                        <a href="{{ url('password/reset') }}"><small>¿Olvidaste tu contraseña?</small></a><br><br>
                                        <a href="{{ url('terminos') }}"><small>Términos y condiciones</small></a>
                                    <br>
                                    <br>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}


@endsection
