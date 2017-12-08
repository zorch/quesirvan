<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Patients\Patient;

use App\Models\Products\Product;

use App\Models\Payments\Payment;

use Carbon;

use Auth;

class PaymentsController extends Controller
{
  public function get()
  {
    $user = Auth::user();
    $patients = Patient::where('clinic_id', $user->clinic_id)->get();
    return view('payments.store', ['patients'=>$patients]);

  }

  public function list()
  {
    $user = Auth::user();
    $payments = Payment::where('clinic_id', $user->clinic_id)->get();
    return view('payments.list', ['payments'=>$payments]);

  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $patient = Patient::where(['clinic_id' => $user->clinic_id, 'curp' => $request['curp']])->first();
    $payment                = new Payment($request->all());
    $payment->patient_id    = $patient->id;
    $payment->clinic_id     = $user->clinic_id;
    $payment->type          = 'cash';
    $payment->date          = Carbon::now();
    $payment->save();
    return redirect('/payments')->with('success', 'Pago Correctamente agregado');
  }
}
