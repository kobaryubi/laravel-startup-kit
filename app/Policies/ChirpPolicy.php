<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;

class ChirpPolicy
{
    /**
     * Determine wheter the user can update the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Chirp  $chirp
     * @return \Illuminate\Auth\Access\bool
     */
    public function update(User $user, Chirp $chirp)
    {
        return $chirp->user()->is($user);
    }
}
