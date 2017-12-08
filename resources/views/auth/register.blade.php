@extends('layouts.app')

@section('content')
<div class="content">
        {!! Form::open(['method' => 'POST',  'url' => url('register'), 'class' => 'form-signin'] ) !!}
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title" style="color:white">Registrate</h4>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Nombre</label>
                                                <input type="text" value="{{ old('name') }}" id="name" name="name" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Apellido</label>
                                                <input type="text" value="{{ old('lastname') }}" id="lastname" name="lastname" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

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
                                                <input type="password" id="password" name="password" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Confirmar Contraseña</label>
                                                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success pull-right">Registrar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
</div>
@endsection
