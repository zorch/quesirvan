
@extends('emails.layout')

@section('content')
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px">
        <div style="color:#ffffff;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong><span style="font-size: 28px; line-height: 33px;">Hola {{$name}}.
          Has sido invitado a nuestra plataforma por la cl&#237;nica {{$clinic}}</span></strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 25px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px">
        <div style="color:#ffffff;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 18px; line-height: 21px;"><strong>Comienza hoy mismo a mejorar tu forma de trabajar</strong></span></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr style="vertical-align: top">
    <td class="button-container" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 15px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px" align="center">
      <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody><tr style="vertical-align: top">
          <td class="button" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top" width="100%" align="center" valign="middle">
              <!--[if mso]>
                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href=""
                  style="
                    height:42px;
                    v-text-anchor:middle;
                    width:146px;"
                    arcsize="60%"
                    strokecolor="#fff"
                    fillcolor="#fff" >
                <w:anchorlock/>
                  <center
                    style="color:#5caaea;
                      font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;
                      font-size:16px;">
              <![endif]-->
             <!--[if !mso]><!- - --><div style="display: inline-block;
              border-radius: 25px;
              -webkit-border-radius: 25px;
              -moz-border-radius: 25px;
              max-width: 25%;
              width: 100%;
              border-top: 0px solid transparent;
              border-right: 0px solid transparent;
              border-bottom: 0px solid transparent;
              border-left: 0px solid transparent;" align="center">

              <table style="border-spacing: 0;border-collapse: collapse;vertical-align: top;height: 42" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;border-radius: 25px;                   -webkit-border-radius: 25px;                   -moz-border-radius: 25px;                  color: #5caaea;                  background-color: #fff;                  padding-top: 5px;                   padding-right: 20px;                  padding-bottom: 5px;                  padding-left: 20px;                  font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align: center" valign="middle"><!--<![endif]-->
                  <a style="display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;background-color: #fff;color: #5caaea" href="http://healthmex.app/register/invite?token={{$token}}" target="_blank">
                        <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;">Registrate</span></span>
                  </a>
                <!--[if !mso]><!- - --></td></tr></tbody></table>
              </div><!--<![endif]-->
              <!--[if mso]>
                    </center>
                </v:roundrect>
              <![endif]-->
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
</tbody></table>
@endsection
