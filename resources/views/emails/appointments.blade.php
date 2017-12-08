
@extends('emails.layout')

@section('content')
<table style="border-spacing: 0;border-collapse: collapse;vertical-align: top" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;padding-top: 30px;padding-right: 0px;padding-bottom: 30px;padding-left: 0px">
        <div style="color:#ffffff;line-height:120%;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;">
          <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, 'Helvetica Neue', Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong><span style="font-size: 28px; line-height: 33px;">Hola {{ $name }}, Te recordamos que tienes una cita en la clinica {{$clinic}} el {{ $date }}.</span></strong></p></div>
        </div>
    </td>
  </tr>
</tbody></table>
@endsection
