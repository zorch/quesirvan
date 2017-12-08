<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Que Sirvan</title>
    <link rel="shortcut icon" href="{{ asset('img/icon.png')}}" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link src="{{ asset('css/jquery-ui.min.css')}}" rel="stylesheet"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{ asset('css/perfect-scrollbar.css')}}" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('css/demo.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href='{{ asset('css/material-icons.css')}}' rel='stylesheet' type='text/css'>

  @yield('assets_top_top')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  @yield('assets_top_bottom')

</head>

<body style="background-image:url({{ asset('img/back-register.jpg')}}); background-size: cover">

  <div id="wrapper">

        <div class="main-panel">
        {{-- @include('layouts.breadcrumb') --}}

          @yield('content')
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
  <script>
  !function() {
    var t;
    if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
    t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n;
        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e, n, o, i;
      e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
      n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
    });
  }();
  drift.SNIPPET_VERSION = '0.3.1';
  drift.load('u3ugeucm6t3w');
  </script>
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
