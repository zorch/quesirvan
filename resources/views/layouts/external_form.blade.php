<!doctype html>
<html lang="en">
<head>


  {{-- One Signal --}}

  <link rel="manifest" href="{{ asset('manifest.json')}}">
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "5a52f3a9-2865-4662-994c-dfe39fd5d596",
      safari_web_id:"web.onesignal.auto.560021c2-877c-448b-9811-f001e7b5ec58",
      subdomainName: 'youth',
      autoRegister: true,
      notifyButton: {
        enable: false /* Set to false to hide */
      },
      allowLocalhostAsSecureOrigin: true

    }]);
  </script>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Que sirvan</title>
    <link rel="shortcut icon" href="{{ asset('img/icon.png')}}" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link src="{{ asset('css/jquery-ui.min.css')}}" rel="stylesheet"/>

    <link href="{{ asset('css/perfect-scrollbar.css')}}" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet"/>

    <style>
      .sk-logo{
        visibility: hidden;
      }
      .messenger-button-icon::after {
        /*animation: bounceIn 2s;*/
        /*animation-delay: 1s;*/
        background: #fff;
        border-radius: 50px;
        box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.3);
        color: #1194f6;
        content: "¿Ayuda?";
        display: block;
        font-size: 12px;
        /*opacity: 0;*/
        padding: 10px;
        position: absolute;
        right: -10px;
        text-align: center;
        top: -40px;
        width: 100px;
      }
      body:before {
        content: "";
        background-image: url({{ URL::to('/') }}/img/nl.jpg);
        background-color: #cccccc;
        opacity: 0.5;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: fixed;
        z-index: -1;
      }
    </style>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='{{ asset('css/material-icons.css')}}' rel='stylesheet' type='text/css'>

  @yield('assets_top_top')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  @yield('assets_top_bottom')

</head>

<body>

  <div id="wrapper">


        <div class="col-lg-6 col-lg-offset-3">
          @include('layouts.topnav')

        {{-- @include('layouts.breadcrumb') --}}

          @yield('content')

          @include('layouts.footer')
        </div>

  </div>
</body>

   <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/material.min.js')}}" type="text/javascript"></script>


    <!--  Charts Plugin -->
    <script src="{{ asset('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> --}}

    <script src="{{ asset('js/perfect-scrollbar.min.js')}}"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('js/material-dashboard.js')}}"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('js/select.js')}}"></script>
    <script src="{{ asset('js/tagsinput.js')}}"></script>

    <script src="{{ asset('js/sharrre.js')}}"></script>


  <!-- Start of Async Drift Code -->
    <script src="{{ asset('js/demo.js')}}"></script>
    <script src="{{ asset('js/sweet-alert.js')}}"></script>

  <!-- End of Async Drift Code -->

  @yield('assets_bottom')

  <script>
    $(function(){
         $( "#value" ).autocomplete({
          source: "/search/autocomplete",
          minLength: 3,
          select: function(event, ui) {
            $('#value').val(ui.item.value);
            $('#id').val(ui.item.id);
          }
        });
    });
  </script>

  <script>
      function disable(select_val,input_id) {
        var e = document.getElementById(select_val);
        var strUser = e.options[e.selectedIndex].value;
        if(strUser === ""){
            document.getElementById(input_id).disabled = false;
        }
        else{
            document.getElementById(input_id).value = document.getElementById(input_id).defaultValue;
            document.getElementById(input_id).disabled = true;
        }
      }
    </script>

</html>
