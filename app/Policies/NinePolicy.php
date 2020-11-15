<?php

namespace App\Policies;

use App\User;
use App\Nine;
use Illuminate\Auth\Access\HandlesAuthorization;

class NinePolicy
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

    public function edit(User $user, Nine $nine)
    {
      return $user->id === $nine->user_id;
    }

    public function delete(User $user, Nine $nine)
    {
      return $user->id === $nine->user_id;
    }
}
