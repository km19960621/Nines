<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Nine;
use App\Order;

class OrderController extends Controller
{
    //
    public function add(Request $request)
    {
      $user_id = Auth::id();
      $nine = Nine::find($request->id);
      return view('order.create', ['user_id' => $user_id, 'nine' => $nine]);
    }

    public function create(Request $request)
    {
      $this->validate($request, Order::$rules);

      $order = new Order;
      $form = $request->all();

      $order->fill($form);
      $order->save();

      return redirect('/');
    }

    public function edit(Request $request)
    {
      $user_id = Auth::id();
      $order = Order::find($request->id);
      $nine = Nine::find($order->nine_id);
      if (empty($order)) {
        abort(404);
      }
      return view('order.edit', ['user_id' => $user_id, 'nine' => $nine, 'order_form' => $order]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Order::$rules);
      $order = Order::find($request->id);
      $order_form = $request->all();
      $order->fill($order_form)->save();
      return redirect('/');
    }

    public function delete(Request $request)
    {
      $order = Order::find($request->id);
      $order->delete();
      return redirect('/');
    }
}
