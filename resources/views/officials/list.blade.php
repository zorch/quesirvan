@extends('layouts.master')
@section('title', 'Funcionarios')
@section('attr_navlink_6', 'class="active"')


@section('assets_top_top')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="content">
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="rose">
                  <i class="material-icons">assignment_ind</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title">Subir -
                      <small class="category">Excel de todos los conquistadores</small>
                  </h4>
                  <form class="" id="form_excel" role="form" method="POST" enctype="multipart/form-data" action="<?php echo e(url('/upload/roster')); ?>" >
                      <?php echo e(csrf_field()); ?>

                      <div class="btn-group" style="margin: auto; display:block; width: 80px">
                          <div class="input-group date col-sm-12">
                          <a class="btn btn-primary" href="https://docs.google.com/spreadsheets/d/1MjVoLhGfO_wLyfRBzMv0AHDVZ8K_npVGBUvermaXWZU/edit?usp=sharing" target="_blank">Descargar ejemplo</a>
                          <br>
                          <br>
                              <label title="Upload image file" for="inputImage" class="btn btn-rose btn-round">
                                  <label class="custom-file-upload">
                                      <input type="file" name='file' id='inputExcel' />
                                      <i class="fa fa-cloud-upload"></i> Subir Excel
                                  </label>
                              </label>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="red">
                  <i class="material-icons">assignment</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title">Funcionarios</h4>
                  <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                      <div class="col-md-offset-10 col-md-2">
                       <a href="{{ url('/officials/new') }}" class="btn btn-lg  btn-success btn-block btn-login"><i class="fa fa-plus"></i> Funcionario</a>
                     </div>
                  </div>
                  <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                          <thead>

               <tr>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Partido</th>
                   <th class="disabled-sorting text-right">Acciones</th>
               </tr>
               </thead>
               <tbody>
               @foreach($officials as $official)
                   <tr class="gradeX">
                       <td>{{$official->name}}</td>
                       <td>{{$official->lastname}}</td>
                       <td>{{$official->party}}</td>
                       <td class="text-right">
                           <a href="{{ url('officials/edit').'/'.$official->id }}" class="btn btn-simple btn-warning btn-icon like"><i class="material-icons">mode_edit</i></a>
                           {!! Form::open(['method' => 'DELETE', 'style'=>'display:inline', 'url' => '/officials/'.$official->id]) !!}
                                           {{ csrf_field() }}
                             <a  onclick="demo.showSwal('warning-message-and-cancel', this)" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                           {!! Form::close() !!}
                       </td>
                   </tr>
               @endforeach
               </tbody>
               <tfoot>
               <tr>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Partido</th>
                   <th class="disabled-sorting text-right">Acciones</th>
               </tr>
               </tfoot>
                      </table>
                  </div>
              </div>
              <!-- end content-->
          </div>
          <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
  </div>
   <!-- end row -->
</div>
@endsection


@section('assets_bottom')
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{ asset('js/plugins/toastr/toastr.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.buttons-pdf').css('margin-left', '10px !important');

            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "iDisplayLength": 25,
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Buscar",
                    "sLengthMenu": "Mostrar _MENU_ elementos"
                }

            });

            $('.card .material-datatables label').addClass('form-group');


            var table = $('#datatables').DataTable();

            @if (session('error'))
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.error('Error', '{{session('error')}}');

                }, 1300);
            @endif

            @if (session('success'))
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('Completado', '{{session('success')}}');

                }, 1300);
            @endif
        });

        $('#inputExcel').change(function() {
          $('#form_excel').submit();
        });


    </script>

    <style>
      input[type="file"] {
          display: none;
      }
      .custom-file-upload {
          border: 1px solid #ccc;
          display: inline-block;
          padding: 6px 12px;
          cursor: pointer;
      }
    </style>
@endsection
