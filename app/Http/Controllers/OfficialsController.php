<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\Officials\Official;

class OfficialsController extends Controller
{
  public function form()
  {
    return view('officials.form');
  }

  public function store(Request $request)
  {
    $user = Auth::user();
    $official = new Official($request->all());
    $official->save();

    $officials = Official::all();
    return view('officials.list', ['officials'=>$officials, 'success'=>'Funcionario agregado correctamente!']);
  }

  public function delete($id)
  {
    $user = Auth::user();
    $official = Official::find($id);

    if(!$official){
      return redirect('/officials')->with('error', 'Funcionario no existe!');
    }

    $official->delete();

    $officials = Official::all();
    return view('officials.list', ['officials'=>$officials]);
  }

  public function edit($id)
  {
    $user = Auth::user();
    $official = Official::find($id);

    if(!$official){
      return redirect('/officials')->with('error', 'Funcionario no existe!');
    }
    return view('officials.edit', ['official'=>$official]);

  }

  public function update(Request $request, $id)
  {
    $user       = Auth::user();
    $official   = Official::find($id);

    if(!$official){
      return redirect('/officials')->with('error', 'Funcionario no existe!');
    }


    $official->fill($request->all());
    $official->update();


    $officials = Official::all();
    return view('officials.list', ['officials'=>$officials, 'success'=>'Funcionario actualizado correctamente!']);
  }

  public function list()
  {
    $officials = Official::all();
    return view('officials.list', compact('officials'));
  }
}
