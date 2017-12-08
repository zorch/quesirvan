<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users\User;

use App\Models\Invitations\Invitation;

use App\Models\Roles\Role;

use Validator;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;

use DB;

use App\Models\Buildings\Building;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'building_name' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function invite_view(Request $request)
    {
        return view('auth.register_invite');
    }

    public function invite_create(Request $request){
        $invitation = Invitation::where(['invite_token'=> $request['token'], 'status'=>'pending'])->first();
        if(!$invitation){
            return redirect('/')->with('error', 'La invitación no existe');
        }
        $user = User::create([
            'name'          => $invitation->name,
            'lastname'      => $invitation->lastname,
            'role_id'       => Role::where('name', $invitation->type)->first()->id,
            'email'         => $invitation->email,
            'building_id'     => $invitation->clinic_id,
            'password'      => bcrypt($request['password']),
            'created_by'    => $invitation->created_by,
            'updated_by'    => $invitation->created_by,
        ]);
        $invitation->status = 'accepted';
        $invitation->user_id = $user->id;
        $invitation->save();

        return redirect('/')->with('success', 'Usuario creado correctamente!');

    }

    protected function create(array $data)
    {

        $user = User::create([
            'name'          => $data['name'],
            'lastname'      => $data['lastname'],
            'role_id'       => Role::where('name', 'doctor')->first()->id,
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
            'created_by'    => 1,
            'updated_by'    => 1,
        ]);

        if($user && $data['building_name']){
            $building = new Building();
            $building->name       = $data['building_name'];
            $building->created_by = $user->id;
            $building->updated_by = $user->id;
            $building->save();
        }

        $user->building_id = $building->id;
        $user->save();

        return $user;
    }
}
