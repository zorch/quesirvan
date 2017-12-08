@extends('layouts.login')

@section('content')

<div class="content">
    <div class="ibox-content col-lg-6">
        {!! Form::open(['method' => 'POST',  'url' => url('register/invite'), 'class' => 'form-signin'] ) !!}
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
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header" data-background-color="orange">
                                <h4 class="title" style="color:white">Define tu contraseña</h4>
                            </div>
                            <div class="card-content">
                                <form>

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

                                    <input id="token" name="token" value="<?php echo $_REQUEST['token']; ?>" type="hidden" />


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
</div>

@endsection
