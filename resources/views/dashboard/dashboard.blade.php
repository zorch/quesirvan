@extends('layouts.master')
@section('title', 'Que Sirvan')
@section('attr_navlink_3', 'class="active"')


@section('assets_top_top')
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">weekend</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Funcionarios</p>
                        <h3 class="card-title">{{$officials_count}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Busquedas</p>
                        <h3 class="card-title">{{$searches_count}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Google Analytics
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">store</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Comentarios</p>
                        <h3 class="card-title">{{$comments_count}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Calificaciones</p>
                        <h3 class="card-title">{{$ratings_count}}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>Manage Listings</h3>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('img/card-2.jpeg') }}">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$899/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Barcelona, Spain</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('img/card-2.jpeg') }}">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Office Studio</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$1.119/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> London, UK</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="{{ asset('img/card-2.jpeg') }}">
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">Beautiful Castle</a>
                        </h4>
                        <div class="card-description">
                            The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>$459/night</h4>
                        </div>
                        <div class="stats pull-right">
                            <p class="category"><i class="material-icons">place</i> Milan, Italy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                scrollX: true,
                // responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
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


    </script>
@endsection
