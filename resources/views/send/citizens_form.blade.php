@extends('layouts.external_form')
@section('title', 'Funcionarios')

@section('assets_top_top')

    <link href="{{ asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="content">
    <div class="ibox-content col-lg-12">
        {!! Form::open(['method' => 'POST', 'files'=>true,  'url' => url('citizens/send'), 'class' => 'form-signin'] ) !!}
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
                                <h4 class="title" style="color:white">APORTA INFORMACIÓN QUE AYUDE A TRANSPARENTAR A LOS CANDIDATOS NUEVO LEÓN 2018</h4>
                            </div>
                            <div class="card-content">
                                <form>


                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aquí escribe el Nombre del aspirante</label>
                                              <input type="text" value="{{isset($document) ? $document->official_name : old('official_name')}}" id="official_name" name="official_name" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aquí cuentanos lo que sabes.</label>
                                              <input type="text" value="{{isset($document) ? $document->text : old('text')}}" id="text" name="text" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aquí escribe tu Municipio</label>
                                              <input type="text" value="{{isset($document) ? $document->city : old('city')}}" id="city" name="city" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aquí escribe tu Nombre si lo deseas (Opcional)</label>
                                              <input type="text" value="{{isset($document) ? $document->name : old('name')}}" id="name" name="name" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aquí escribe tu Email de contacto (Opcional)</label>
                                              <input type="text" value="{{isset($document) ? $document->email : old('email')}}" id="email" name="email" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Aqui escribe tu Teléfono de contacto (Opcional)</label>
                                              <input type="text" value="{{isset($document) ? $document->phone : old('phone')}}" id="phone" name="phone" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-12">
                                      <div class="form-group label-floating">
                                          <p class="control-label">Sube aqui documentos, pdfs o fotos. (Hasta 10mb por archivo)</p>
                                          <input type="file" name="attachments[]" multiple />
                                          <button class="btn btn-success">Seleccionar archivos</button>
                                      </div>
                                  </div>

                                <p>*La información que nos proporciones se utilizará como parte de nuestra investigación, solo si se puede comprobar y documentar. Nuca revelaremos tus datos personales.</p>
                                  <button type="submit" class="btn btn-primary pull-right">Enviar Información</button>
                                  <div class="clearfix"></div>
                              </form>

                              <div>
                                <h3>Contáctanos</h3>
                                <h4>Whatsapp: 811-864-3725</h4>
                                <h4>Email: servidores@quesirvan.mx</h4>
                                <h4><a href="https://twitter.com/quesirvan">Twitter</h4>
                                <h4><a href="https://facebook.com/quesirvan">Facebook</h4>
                                <a id="twitter_share" style="background-color:#1dcaff" class="btn btn-primary pull-right" href="#">Compartir en twitter</a>
                                <a id="facebook_share" style="background-color:#3B5998" class="btn btn-primary pull-right" href="#">Compartir en Facebook</a>
                              </div>

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

            $('#facebook_share').sharrre({
              share: {
                facebook: true
              },
              enableHover: false,
              enableTracking: false,
              text:"Yo participo para tener Servidores #QueSirvan",
              click: function(api, options){
                api.simulateClick();
                api.openPopup('facebook');
              },
              template: '<i class="fa fa-facebook-square"></i> &middot; 50',
              url: 'http://quesirvan.mx'
            });

            $('#twitter_share').sharrre({
               share: {
                 twitter: true
               },
              text:"Yo participo para tener Servidores #QueSirvan",
               enableHover: false,
               enableTracking: false,
               buttons: { twitter: {via: 'quesirvan'}},
               click: function(api, options){
                 api.simulateClick();
                 api.openPopup('twitter');
               },
               template: '<i class="fa fa-twitter"></i> &middot; 45',
               url: 'http://quesirvan.mx'
             });


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
