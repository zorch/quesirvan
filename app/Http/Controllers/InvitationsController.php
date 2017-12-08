<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use Mail;

use App\Models\Invitations\Invitation;

use App\Models\Users\User;

use App\Models\Patients\Patient;

class InvitationsController extends Controller
{
  public function invitations_view()
  {
    $patient = session('patient');
    return view('invitations.invitation', ['patient'=>$patient]);
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $current_user = User::where('email', $request['email'])->first();
    if($current_user){
      return redirect('users/invite')->with('error', 'Este usuario ya esta registrado con nosotros!');
    }
    $current_invite = Invitation::whereEmail($request['email'])->where(['status' => 'pending'])->first();
    if($current_invite){
      $current_invite->status = 'rejected';
      $current_invite->update();
    }

    $invitation = new Invitation();

    $invitation->email        = $request['email'];
    $invitation->name         = $request['name'];
    $invitation->lastname     = $request['lastname'];
    $invitation->clinic_id    = $user->clinic_id;
    $invitation->type         = $request['type'];

    $invitation->save();

    $invitation->invite_token = $current_invite ? $current_invite->invite_token : bin2hex(random_bytes(15));
    $invitation->update();

    Mail::send('emails.invite', ['name' => $invitation->name, 'token' => $invitation->invite_token, 'clinic' => $user->clinic->name], function ($m) use($invitation, $user){
        $m->to($invitation->email, $invitation->name)->subject('Hey la clinica '.$user->clinic->name.' te ha invitado');
    });

    return redirect('users/invite')->with('success', 'Usuario invitado con exito!');
  }
}
