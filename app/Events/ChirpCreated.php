<?php

namespace App\Events;

use App\Models\Chirp;
use Illuminate\Foundation\Events\Dispatchable;

class ChirpCreated
{
    use Dispatchable;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public Chirp $chirp)
    {

    }
}
