<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Traits\Uploader;

class ProfileController extends Controller
{
    use Uploader;

    public function get(Request $request)
    {
      $user = Auth::user();
      return view('users.profile', ['user'=>$user]);
    }

    public function update(Request $request)
    {
      $user = Auth::user();

      $user->fill($request->all());

      $user->update();

      return redirect('profile')->with(['success'=> 'Perfil Actualizado Correctamente!']);
    }

    public function picture(Request $request)
    {

      $user = Auth::user();

      $user->avatar_path = $this->store_file($request->profile_picture, '/users/' . $user->id . '/', 'profile');

      $user->save();

      return redirect('profile')->with(['success'=> 'Foto de perfil Actualizada Correctamente!']);
    }
}
