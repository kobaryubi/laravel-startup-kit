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
     * @return bool
     */
    public function update(User $user, Chirp $chirp)
    {
        return $chirp->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Chirp  $chirp
     * @return bool
     */
    public function delete(User $user, Chirp $chirp)
    {
        return $this->update($user, $chirp);
    }
}
