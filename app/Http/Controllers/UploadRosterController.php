<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Users\User;

use App\Models\Officials\Official;


use Auth;

use Excel;

class UploadRosterController extends ApiController
{
  public function upload(Request $request)
  {
    $user = Auth::user();

    if(!$user->has_role('admin')){
      return redirect('/')->with('error', 'No eres administrador');
    }
    $officials = Excel::load($request->file, false, 'ISO-8859-1')->get();
    foreach ($officials as $official_csv) {
      $official = new Official();
      $official->name                 = $official_csv->name?:'';
      $official->lastname             = $official_csv->lastname?:'';
      $official->actual_position      = $official_csv->actual_position?:'';
      $official->party                = $official_csv->party?:'';
      $official->type                 = $official_csv->type?:'';
      $official->age                  = $official_csv->age?:'';
      $official->facebook_count       = $official_csv->facebook_count?:'';
      $official->twitter_count        = $official_csv->twitter_count?:'';
      $official->facebook             = $official_csv->facebook?:'';
      $official->twitter              = $official_csv->twitter?:'';
      $official->aspirated_positions  = $official_csv->aspirated_positions?:'';
      $official->academic_degree      = $official_csv->academic_degree?:'';
      $official->public_charges       = $official_csv->public_charges?:'';
      $official->highlights           = $official_csv->highlights?:'';
      $official->paving               = $official_csv->paving?:'';
      $official->garbage_collection   = $official_csv->garbage_collection?:'';
      $official->wtf_expenses         = $official_csv->wtf_expenses?:'';
      $official->payroll_officials    = $official_csv->payroll_officials?:'';
      $official->security             = $official_csv->security?:'';
      $official->economic_networks    = $official_csv->economic_networks?:'';
      $official->power_networks       = $official_csv->power_networks?:'';
      $official->party_memberships    = $official_csv->party_memberships?:'';
      $official->anomalies            = $official_csv->anomalies?:'';
      $official->awards               = $official_csv->awards?:'';
      $official->sources              = $official_csv->sources?:'';
      $official->gender               = $official_csv->gender?:'';
      $official->district             = $official_csv->district?:'';

      $official->save();

    }
    return redirect('/')->with('success', 'Funcionarios agregados correctamente!');

  }
}
