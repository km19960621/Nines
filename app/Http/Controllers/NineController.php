<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Nine;
use App\Order;

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
      $user_id = Auth::id();
      return view('nine.create', ['user_id' => $user_id]);
    }

    public function create(Request $request)
    {
      $this->validate($request, Nine::$rules);

      $nine = new Nine;
      $form = $request->all();

      $nine->fill($form);
      $nine->save();

      return redirect('/');
    }

    public function show(Request $request)
    {
      $user_id = Auth::id();
      $nine = Nine::find($request->id);
      $orders = DB::table('orders')->where('nine_id', $nine->id)->get();
      if (empty($nine)) {
        abort(404);
      }
      return view('nine.show', ['user_id' => $user_id, 'nine' => $nine, 'orders' => $orders]);
    }

    public function edit(Request $request)
    {
      $user_id = Auth::id();
      $nine = Nine::find($request->id);
      if (empty($nine)) {
        abort(404);
      }
      return view('nine.edit', ['user_id' => $user_id, 'nine_form' => $nine]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Nine::$rules);
      $nine = Nine::find($request->id);
      $nine_form = $request->all();
      $nine->fill($nine_form)->save();
      return redirect('/');
    }

    public function delete(Request $request)
    {
      $nine = Nine::find($request->id);
      $nine->delete();
      return redirect('/');
    }
}
