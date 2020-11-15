<?php

namespace App\Policies;

use App\User;
use App\Order;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user, Order $order)
    {
      return $user->id == $order->user_id;
    }

    public function delete(User $user, Order $order)
    {
      return $user->id == $order->user_id;
    }
}
