<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Models\Users\User;

use App\Models\Patients\Patient;

use App\Models\Invitations\Invitation;

class UsersController extends Controller
{
  public function list(Request $request)
  {

    $user  = Auth::user();

    $users = [];
    $registered = User::where('clinic_id', $user->clinic_id)->get();
    foreach ($registered as $user) {
      array_push($users, ['id'=>$user->id, 'name'=>$user->name . ' ' . $user->lastname , 'email'=>$user->email, 'status'=>'registered', 'role'=>$user->role->name]);
    }
    $invites = Invitation::where(['clinic_id' => $user->clinic_id, 'status' => 'pending'])->get();

    foreach ($invites as $user) {
      array_push($users, ['id'=>$user->id, 'name'=>$user->name . ' ' . $user->lastname , 'email'=>$user->email, 'status'=>'invited', 'role'=>$user->type]);
    }

    return view('users.list', ['users'=>$users]);
  }
}
