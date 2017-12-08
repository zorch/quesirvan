<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Mail\Mailer;

use App\Traits\Updater;

class User extends Authenticatable
{
    use Updater;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'city', 'country', 'zip_code', 'state', 'address', 'phone', 'email', 'password', 'created_by', 'updated_by', 'deleted_by', 'role_id', 'lastname', 'cedula', 'birthdate', 'clinic_id'
    ];

    protected $dates = ['birthdate'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function has_role($role)
    {
      return $this->role->name ===  $role;
    }

    public function role()
    {
      return $this->belongsTo('App\Models\Roles\Role');
    }

    public function clinic()
    {
      return $this->belongsTo('App\Models\Clinics\Clinic');
    }
}
