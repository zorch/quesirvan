@extends('layouts.app')

@section('content')

<div class="content">
    <div class="ibox-content col-lg-12">
        {!! Form::open(['method' => 'POST',  'url' => url('password/reset'), 'class' => 'form-signin'] ) !!}
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
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title" style="color:white">Reestablecer Contraseña</h4>
                            </div>
                            <div class="card-content">
                                <form>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email</label>
                                                <input type="email" value="{{ old('email') }}" id="email" name="email" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Contraseña</label>
                                                <input type="password" value="{{ old('email') }}" id="password" name="password" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Confirmar Contraseña</label>
                                                <input type="password" value="{{ old('email') }}" id="password_confirmation" name="password_confirmation" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="token" value="{{ $token }}">


                                    <button type="submit" class="btn btn-success pull-right">Reestablecer</button>
                                    <div class="clearfix"></div>
                                    <a href="{{ url('login') }}"><small>Iniciar Sesión</small></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@endsection
