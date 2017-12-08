<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Models\Patients\Patient;

use App\Models\Products\Product;

use App\Models\Charges\Charge;


class ChargesController extends Controller
{
  public function get()
  {
    $user = Auth::user();
    $patients = Patient::where('clinic_id', $user->clinic_id)->get();
    $products = Product::where('clinic_id', $user->clinic_id)->get();
    return view('charges.store', compact('products', 'patients'));
  }

  public function list(Request $request)
  {
    $user = Auth::user();
    $patient = session('patient');
    $charges = Charge::where('clinic_id', $user->clinic_id)->get();
    return view('charges.list', compact('charges', 'patient'));
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $patient = Patient::where(['clinic_id' => $user->clinic_id, 'curp' => $request['curp']])->first();
    $product = Product::find($request['concept']);

    $charge = new Charge($request->all());
    $charge->concept        = $product->name;
    $charge->product_id     = $product->id;
    $charge->clinic_id      = $user->clinic_id;
    $charge->total          = $request['quantity'] * $request['unit_price'];
    $charge->patient_id     = $patient->id;
    $charge->save();
    return redirect('/charges')->with('success', 'Cargo Correctamente agregado');

  }
}
