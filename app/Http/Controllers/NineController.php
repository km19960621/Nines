<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nine;

class NineController extends Controller
{
    //
    public function index(Request $request)
    {
      $nines = Nine::all()->reverse();
      return view('nine.index', ['nine' => $nines,]);
    }

    public function add()
    {
      return view('nine.create');
    }

    public function create(Request $request)
    {
      //$this->validate($request, Nine::$rules);

      $nine = new Nine;
      $form = $request->all();

      $nine->fill($form);
      $nine->save();

      return redirect('nine');
    }

    public function edit()
    {
      return view('nine.edit');
    }

    public function update()
    {
      return redirect('nine');
    }
}
