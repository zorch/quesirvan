<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Accounts\Account;

use App\Models\Employees\Employee;

class BalancesController extends Controller
{
  public function store(Request $request)
  {
    $employee = $request['employee_id'] ? Employee::find($request['employee_id']) : session('employee');
    $employee->account->balance = $employee->account->balance + $request['add_balance'];
    $employee->account->save();

    return $request['employee_id'] ? redirect('/')->with(['success' => 'Saldo Correctamente Agregado!']): redirect('search')->with(['success' => 'Saldo Correctamente Agregada!', 'card_number'=> $employee->card_number]);

  }
}
