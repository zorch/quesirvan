<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Models\Employees\Employee;

use App\Models\Accounts\Account;

use App\Models\Products\Product;

use Storage;

use App\Traits\Uploader;

class EmployeesController extends Controller
{
  use Uploader;

  public function search(Request $request)
  {
    $user = Auth::user();
    if ($request['card_search'] && !Employee::where(['card_number'=>$request['card_search'], 'building_id' => $user->building_id])->first()){
      return redirect('/')->with('error', 'No se encontraron resultados para esa busqueda, introduzca de nuevo el curp!');
    }
    $employee = !$request['card_search'] ? session('employee') : Employee::where(['card_number'=>$request['card_search'], 'building_id' => $user->building_id])->first();
    if(!$employee){
      return redirect('/')->with('error', 'No se encontraron resultados para esa busqueda, introduzca de nuevo el numero de tarjeta');
    }
    $employee_picture = $employee->avatar_path ? Storage::url('employees/'.$employee->id.'/'.get_thumbnail($employee->avatar_path)): Storage::url('employees/default.png');

    $request->session()->put('employee', $employee);

    $account = Account::where(['employee_id'=> $employee->id, 'building_id'=>$user->building_id])->first();


    return view('employees.search',['account' => $account, 'employee'=> $employee, 'employee_picture'=>$employee_picture, 'card_number' => $request['card_search'], 'total'=>1]);
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $exist_employee = Employee::where(['employee_number'=> $request['employee_number'], 'building_id'=> $user->building_id ])->first();
    if($exist_employee){
      return redirect('/')->with('error', 'Empleado agregado previamente!');
    }

    $employee = new Employee($request->all());
    $employee->building_id = $user->building_id;
    $employee->save();

    if($request['employee_picture']){
      $employee->avatar_path = $this->store_file($request['employee_picture'], '/patients/' . $employee->id . '/', 'employees');
    }

    $employee->update();

    $account = new Account();
    $account->employee_id = $employee->id;
    $account->building_id  = $user->building_id;
    $account->balance    = 0;
    $account->save();

    return redirect('/')->with('success', 'Empleado Correctamente Agregado!');

  }

  public function get()
  {
    dd('hi');
    return true;
  }

  public function picture()
  {
    $employee = session('employee');

    if(!$employee){
      return redirect('/')->with(['error'=> 'Seleccione empleado!']);
    }

    $employee->avatar_path = $this->store_file($request->profile_picture, '/patients/' . $employee->id . '/', 'employee');

    $employee->save();

    return redirect('/employees/'.$employee->id)->with(['success'=> 'Foto de empleado Actualizada Correctamente!']);
  }

  public function update()
  {
    return true;
  }

  public function list()
  {
    $user = Auth::user();
    $employees = Employee::where('building_id', $user->building_id)->get();
    return view('employees.list', [ 'employees' => $employees ]);
  }
}
