<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\User;

class UserController extends Controller
{
    //
    public function show()
    {
      $user = Auth::user();
      return view('user.show', ['user' => $user]);
    }

    public function edit()
    {
      $user = Auth::user();
      return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
      $this->validate($request, User::$rules);
      $user = Auth::user();
      $user_form = $request->all();
      $user->fill($user_form)->save();
      return redirect('user/show');
    }
}
