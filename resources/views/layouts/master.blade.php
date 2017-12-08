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

    <meta name="description" content="#Que sirvan es una iniciativa de jovenes adventistas que buscando facilitar el trabajo abnegado dentro de la Iglesia, comenzando por los clubes y habra mas.">
    <meta name="keywords" content="conquistadores, aventureros, guias mayores, adventistas, JA, Jovenes Adventistas, septimo dia, clubes ja, clubes">

    <meta property="og:url" content="http://youth.appventist.mx/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="#Que sirvan mejorando tu manera de trabajar con la Iglesia">
    <meta property="og:site_name" content="Appventist" />
    <meta property="og:image" content="http://youth.appventist.mx/img/screen.png" />
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="Iniciativa Adventista que busca facilitar y proporcionar recursos para la vida cristiana. Apoyanos">
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

    @include('layouts.leftnav')

        <div class="main-panel">
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
    <script src="https://cdn.smooch.io/smooch.min.js"></script>
  <script>
    Smooch.init({
      appToken: '6l8e4q4ne2t53361iiyy1g30s',
      customText: {
        headerText: '¿Como te podemos ayudar?',
        inputPlaceholder: 'Escribenos un mensaje...',
        sendButtonText: 'Enviar',
        introductionText: 'Hey bienvenido, tienes alguna duda? No dudes en contactarnos!',
        introAppText: 'o mandanos un mensaje por tu aplicación preferida.',
        settingsText: 'Puedes dejarnos tu email y nos comunicaremos a la brevedad.',
        settingsReadOnlyText: 'We\'ll get back to you at this email address if we missed you.',
        settingsInputPlaceholder: 'Your email address',
        settingsSaveButtonText: 'Save',
        settingsHeaderText: 'Settings',
        settingsNotificationText: 'In case we\'re slow to respond you can <a href data-ui-settings-link>leave us your email</a>.',
        actionPaymentError: 'An error occurred while processing the card. <br> Please try again or use a different card.',
        actionPaymentCompleted: 'Payment Completed',
        actionPostbackError: 'An error occurred while processing your action. Please try again.',
        messageError: 'An error occured while sending your message. Please try again.',
        invalidFileError: 'Only images are supported. Choose a file with a supported extension (jpg, jpeg, png, gif, or bmp).',
        messageIndicatorTitleSingular: '({count}) Nuevo Mensaje',
        messageIndicatorTitlePlural: '({count}) Nuevos Mensajes',
        connectNotificationText: 'Be notified inside your other apps when you get a reply.',
        notificationSettingsChannelsTitle: 'Other Channels',
        notificationSettingsChannelsDescription: 'You can also talk to us from your favorite app or service.',
        notificationSettingsConnectedAs: 'Conectado como {username}',
        notificationSettingsConnected: 'Conectado',
        wechatQRCodeError: 'An error occurred while fetching your WeChat QR code. Please try again.',
        messengerChannelDescription: 'Connect your Facebook Messenger account to be notified when you get a reply and carry the conversation on Facebook Messenger.',
        frontendEmailChannelDescription: 'To talk to us using email just send a message to our email address and we\'ll reply shortly:',
        smsChannelDescription: 'Connect your SMS number to be notified when you get a reply and carry the conversation over SMS.',
        smsChannelPendingDescription: 'Check your messages at {number} to confirm your phone number.',
        telegramChannelDescription: 'Connect your Telegram account to be notified when you get a reply and carry the conversation on Telegram',
        wechatChannelDescriptionMobile: 'Connect your WeChat account to be notified when you get a reply and carry the conversation on WeChat. To get started, save this QR code image and upload it in the <a href=\'weixin://dl/scan\'>QR code scanner</a>.',
        wechatChannelDescription: 'Connect your WeChat account to be notified when you get a reply and carry the conversation on WeChat. To get started, scan this QR code using the WeChat app.',
        lineChannelDescription: 'To talk to us using LINE, scan this QR code using the LINE app and send us a message.',
        viberChannelDescriptionMobile: 'Connect your Viber account to be notified when you get a reply and carry the conversation on Viber. To get started, install the Viber app and tap Connect.',
        viberChannelDescription: 'Connect your Viber account to be notified when you get a reply and carry the conversation on Viber. To get started, scan the QR code using the Viber app.',
        smsTooManyRequestsError: 'A connection for that number was requested recently. Please try again in {seconds} seconds.',
        smsBadRequestError: 'We were unable to communicate with this number. Try again or use a different one.',
        smsUnhandledError: 'Something went wrong. Please try again.',
        smsPingChannelError: 'There was an error sending a message to your number.',
        smsLinkCancelled: 'Link to {appUserNumber} was cancelled.',
        smsLinkPending: 'Pending',
        smsStartTexting: 'Start Texting',
        smsChangeNumber: 'Change my number',
        smsSendText: 'Send me a text',
        smsContinue: 'Continue',
        smsCancel: 'Cancel',
        transferError: 'An error occurred when attempting to generate a link for this channel. Please try again.',
        fetchingHistory: 'Retrieving history...',
        fetchHistory: 'Load more',
        clickToRetry: 'Message not delivered. Click to retry.',
        tapToRetry: 'Message not delivered. Tap to retry.',
        locationSendingFailed: 'Could not send location',
        locationServicesDenied: 'This website cannot access your location. Please type your location instead.',
        locationNotSupported: 'This website cannot access your location. Allow access in your settings or type your location instead.',
        locationSecurityRestriction: 'Your browser does not support location services or it’s been disabled. Please type your location instead.'
      }
  });
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
