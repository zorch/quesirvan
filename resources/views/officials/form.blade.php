@extends('layouts.master')
@section('title', 'Ingrediente')
@section('attr_navlink_3', 'class="active"')

@section('assets_top_top')

    <link href="{{ asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="content">
    <div class="ibox-content col-lg-8 col-md-offset-2">
        {!! Form::open(['method' => 'POST',  'url' => url('officials'), 'class' => 'form-signin'] ) !!}
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
                                <h4 class="title" style="color:white">Agregar un Funcionario</h4>
                            </div>
                            <div class="card-content">
                                @include('officials.form_content')
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

@section('assets_bottom')
    <script src="{{ asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('js/select.js')}}"></script>
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

    <script>
        $(document).ready(function(){
            @if (session('error') || !empty($error))
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.error('Error', '{{session('error') ?: ($error ?:'Error')}}');

                }, 1300);
            @endif

            @if (session('success') || ! empty($success))
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('Completado', '{{session('success') ?: ($success ?:'Completado')}}');

                }, 1300);
            @endif

            $('#picker_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true,
                format: "yyyy-mm-dd"
            });
        });

    </script>
@endsection
