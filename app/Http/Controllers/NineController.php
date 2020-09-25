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
      return view('nine.index', ['nine' => $nines]);
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

    public function show(Request $request)
    {
      $nine = Nine::find($request->id);
      if (empty($nine)) {
        abort(404);
      }
      return view('nine.show', ['nine' => $nine]);
    }

    public function edit(Request $request)
    {
      $nine = Nine::find($request->id);
      if (empty($nine)) {
        abort(404);
      }
      return view('nine.edit', ['nine_form' => $nine]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Nine::$rules);
      $nine = Nine::find($request->id);
      $nine_form = $request->all();
      $nine->fill($nine_form)->save();
      return redirect('nine');
    }

    public function delete(Request $request)
    {
      $nine = Nine::find($request->id);
      $nine->delete();
      return redirect('nine');
    }
}
