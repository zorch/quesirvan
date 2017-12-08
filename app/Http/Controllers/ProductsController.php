<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\Models\Products\Product;

use App\Models\Employees\Employee;

class ProductsController extends Controller
{
  public function get()
  {
    return view('products.store');
  }

  public function list()
  {
    $user = Auth::user();
    $products = Product::where('building_id', $user->building_id)->get();
    return view('products.list', ['products' => $products]);
  }

  public function store(Request $request)
  {
    $user = Auth::user();

    $product = new Product($request->all());
    $product->building_id  = $user->building_id;
    $product->save();
    return redirect('/products')->with('success', 'Producto Correctamente agregado');

  }

  public function assign(Request $request)
  {
    $user = Auth::user();
    $employee = Employee::find($request['employee_id']);
    $product  = Product::find($request['product_id']);
    if($employee->account->balance < $product->price){
      return redirect('/')->with('error', 'Producto ' .$product->name. ' no asignado, precio mayor a balance');
    }

    $employee->account->balance = $employee->account->balance - $product->price;

    $employee->account->save();

    return redirect('/')->with('success', 'Producto ' .$product->name. ' asignado correctamente');


  }
}
