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
      /*
      $pitcher = $nine->pitcher;
      $catcher = $nine->catcher;
      $first_baseman = $nine->first_baseman;
      $second_baseman = $nine->second_baseman;
      $third_baseman = $nine->third_baseman;
      $shortstop = $nine->shortstop;
      $left_fielder = $nine->left_fielder;
      $center_fielder = $nine->center_fielder;
      $right_fielder = $nine->right_fielder;
      $designated_hitter = $nine->designated_hitter;
      */
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

    }

    public function update(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
