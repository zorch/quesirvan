<?php

namespace App\Models\Officials;

use App\Traits\Updater;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
  use Updater;

  protected $fillable = ['name', 'lastname', 'actual_position', 'party', 'type', 'age', 'facebook', 'twitter', 'aspirated_positions', 'academic_degree', 'public_charges', 'highlights', 'paving', 'garbage_collection', 'wtf_expenses', 'payroll_officials', 'security', 'economic_networks', 'power_networks', 'party_memberships', 'anomalies', 'awards', 'sources', 'gender'];
    //
}
