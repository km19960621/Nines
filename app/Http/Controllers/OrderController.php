<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nine;
use App\Order;

class OrderController extends Controller
{
    //
    public function add(Request $request)
    {
      $nine = Nine::find($request->id);
      return view('order.create', ['nine' => $nine]);
    }

    public function create(Request $request)
    {
      $this->validate($request, Order::$rules);

      $order = new Order;
      $form = $request->all();

      $order->fill($form);
      $order->save();

      return redirect('nine');
    }

    public function edit(Request $request)
    {
      $order = Order::find($request->id);
      $nine = Nine::find($order->nine_id);
      if (empty($order)) {
        abort(404);
      }
      return view('order.edit', ['nine' => $nine, 'order_form' => $order]);
    }

    public function update(Request $request)
    {
      $this->validate($request, Order::$rules);
      $order = Order::find($request->id);
      $order_form = $request->all();
      $order->fill($order_form)->save();
      return redirect('nine');
    }

    public function delete(Request $request)
    {
      $order = Order::find($request->id);
      $order->delete();
      return redirect('nine');
    }
}
