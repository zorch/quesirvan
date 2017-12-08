<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer;

use Illuminate\Http\Request;

use App\Traits\Uploader;

class SendController extends Controller
{
  use Uploader;

  public function get_citizens()
  {
    return view('send.citizens_form');
  }

  public function get_officials()
  {
    return view('send.officials_form');
  }

  public function send_officials(Request $request)
  {
    dd($request);
  }

  public function send_citizens(Request $request, Mailer $mailer)
  {

    $mailer->send('emails.citizens', ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'text' => $request->text, 'city' => $request->city, 'official_name' => $request->official_name], function ($m) use($request) {
        $m->to('jorge.dzul.escobar@gmail.com', 'Jorge Dzul')->subject('Documentos Ciudadanos');
        if($request->attachments){
          foreach ($request->attachments as $key => $file) {
            $m->attach($file, ['as'=> 'documento'.$key.'.'.$file->guessExtension()]);
          }
        }

    });
    return view('send.citizens_form');
  }
}
