<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Updater;

class Role extends Model
{
  use Updater;
    //

  public function user()
  {
    return $this->hasOne('App\Models\Users\User');
  }
}
