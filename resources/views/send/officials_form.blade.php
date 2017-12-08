@extends('layouts.external_form')
@section('title', 'Funcionarios')

@section('meta')
    <meta name="description" content="Cuéntanos de los aspirantes | #QueSirvan Nuevo León">
    <meta name="keywords" content="quesirvan, diputados, senadores, partidos politicos, transparencia">

    <meta property="og:url" content="http://quesirvan.mx/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="#Cuéntanos de los aspirantes | #QueSirvan Nuevo León">
    <meta property="og:site_name" content="Appventist" />
    <meta property="og:image" content="http://nl.quesirvan.mx/img/cuentanosquesirvanmx.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="¿Conoces a alguna persona aspirante a servidor público en Nuevo León? ¿Qué nos puedes decir? Cuéntanos...">
@endsection

@section('assets_top_top')

    <link href="{{ asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

@endsection

@section('content')
<div class="content">
    <div class="ibox-content col-lg-12">
        {!! Form::open(['method' => 'POST',  'url' => url('officials/send'), 'class' => 'form-signin'] ) !!}
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
                                <h4 class="title" style="color:white">ASPIRANTE TRANSPARENTE</h4>
                            </div>
                            <div class="card-content">
                                <form>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Nombre</label>
                                              <input type="text" value="{{isset($official) ? $official->name : old('name')}}" id="name" name="name" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Apellidos</label>
                                              <input type="text" value="{{isset($official) ? $official->lastname : old('lastname')}}" id="lastname" name="lastname" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Email</label>
                                              <input type="text" value="{{isset($official) ? $official->email : old('email')}}" id="email" name="email" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Edad</label>
                                              <input type="text" value="{{isset($official) ? $official->age : old('age')}}" id="age" name="age" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Distrito o Municipio o Estado</label>
                                              <input type="text" value="{{isset($official) ? $official->city_name : old('city_name')}}" id="city_name" name="city_name" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <select data-actions-box="true" id="type" name="type" class="selectpicker" data-style="select-with-transition" title="Elige Cargo" data-size="7">
                                              <option disabled> Elige Cargo</option>
                                              <option value="mayor">Presidente Municipal</option>
                                              <option value="counselor">Regidor</option>
                                              <option value="local_deputy">Diputado Local</option>
                                              <option value="federal_deputy">Diputado Federal</option>
                                              <option value="senator">Senador</option>

                                          </select>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <select data-actions-box="true" id="party" name="party" class="selectpicker" data-style="select-with-transition" title="¿Quién te postula?" data-size="7">
                                              <option disabled> ¿Quién te postula?</option>
                                              <option value="independent">Independiente</option>
                                              <option value="pan">PAN: Partido Acción Nacional</option>
                                              <option value="pes">PES: Partido Encuentro Social</option>
                                              <option value="MC">MC: Partido Movimiento Ciudadano</option>
                                              <option value="morena">MORENA: Partido Movimiento Regeneración Nacional</option>
                                              <option value="panal">PANAL: Partido Nueva Alianza</option>
                                              <option value="pri">PRI: Partido Revolucionario Institucional</option>
                                              <option value="pt">PT: Partido del Trabajo</option>
                                              <option value="pvem">PVEM: Partido Verde Ecologista de México</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Ocupación Actual</label>
                                              <input type="text" value="{{isset($official) ? $official->actual_position : old('actual_position')}}" id="actual_position" name="actual_position" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Escribe tu usuario de twitter</label>
                                              <input type="text" value="{{isset($official) ? $official->twitter : old('twitter')}}" id="twitter" name="twitter" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Escribe tu dirección de facebook</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">¿Por qué quieres ser servidor público?</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Propuestas 5</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">¿Cuándo seas candidato nos proporcionaras tu 3 de 3 para publicarla?</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">¿Tienes algún conflicto de interés que pueda afectar la toma de decisiones como servidor público?</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Foto perfíl</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Documentos</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Describete en una frase</label>
                                              <input type="text" value="{{isset($official) ? $official->facebook : old('facebook')}}" id="facebook" name="facebook" class="form-control" >
                                          </div>
                                      </div>
                                  </div>

                                  <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Tus 5 propuestas </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h4 class="panel-title">
                                                            Propuestas
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Propuesta</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="academic_degree_name_{{$i}}" name="academic_degree_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">¿Cómo lo vas a hacer</label>
                                                                      <input type="text" value="" id="academic_degree_place_{{$i}}" name="academic_degree_place_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">¿En cuánto tiempo?</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="academic_degree_year_{{$i}}" name="academic_degree_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    <div class="card-header">
                                        <h4 class="card-title">Experiencia </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h4 class="panel-title">
                                                            Grados Académicos
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Grado Academico</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="academic_degree_name_{{$i}}" name="academic_degree_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institucion Academica</label>
                                                                      <input type="text" value="" id="academic_degree_place_{{$i}}" name="academic_degree_place_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Años en que lo curso ej. 1990-1994</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="academic_degree_year_{{$i}}" name="academic_degree_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                        <h4 class="panel-title">
                                                            Cargos Públicos
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Grado Academico</label>
                                                                      <input type="text" value="" id="public_charge_name_{{$i}}" name="public_charge_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institucion Academica</label>
                                                                      <input type="text" value="" id="public_charge_place_{{$i}}" name="public_charge_place_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Años en que lo curso ej. 1990-1994</label>
                                                                      <input type="text" value="" id="public_charge_years_{{$i}}" name="public_charge_years_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                        <h4 class="panel-title">
                                                            Premios y reconocimientos
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Nombre del reconocimiento</label>
                                                                      <input type="text" value="" id="award_name_{{$i}}" name="award_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institución</label>
                                                                      <input type="text" value="" id="award_place_{{$i}}" name="award_place_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Año en que lo recibio ej. 2017</label>
                                                                      <input type="text" value="" id="award_year_{{$i}}" name="award_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h4 class="panel-title">
                                                            Membresias Partidistas
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Grado Academico</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="membership_name_{{$i}}" name="membership_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institucion Academica</label>
                                                                      <input type="text" value="" id="membership_party_{{$i}}" name="membership_party_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Años en que lo curso ej. 1990-1994</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="membership_year_{{$i}}" name="membership_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <h4 class="panel-title">
                                                            Cargos Partidistas
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Grado Academico</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="party_charge_name_{{$i}}" name="party_charge_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institucion Academica</label>
                                                                      <input type="text" value="" id="party_charge_party_{{$i}}" name="party_charge_party_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Años en que lo curso ej. 1990-1994</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="party_charge_year_{{$i}}" name="party_charge_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <h4 class="panel-title">
                                                            Experiencia en Sector Privado
                                                            <i class="material-icons">keyboard_arrow_down</i>
                                                        </h4>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
                                                    <div class="panel-body">
                                                        @for ($i = 0; $i < 10; $i++)
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Grado Academico</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="private_charge_name_{{$i}}" name="private_charge_name_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Institucion Academica</label>
                                                                      <input type="text" value="" id="private_charge_place_{{$i}}" name="private_charge_place_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                              <div class="col-md-4">
                                                                  <div class="form-group label-floating">
                                                                      <label class="control-label">Años en que lo curso ej. 1990-1994</label>
                                                                      <input type="text" value="{{isset($official) ? $official->academic_degree_name_0 : old('academic_degree')}}" id="private_charge_year_{{$i}}" name="private_charge_year_{{$i}}" class="form-control" >
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Guardar Funcionario</button>
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
              text:"Compartí mi información en #quesirvan | Estoy a favor de la transparencia",
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
               enableHover: false,
               text:"Compartí mi información en #quesirvan | Estoy a favor de la transparencia",
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
