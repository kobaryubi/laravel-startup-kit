<?php

namespace App\Listeners;
use App\Events\ChirpCreated;
use App\Notifications\NewChirp;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendChirpCreatedNotifications implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param \App\Events\ChirpCreated $event
     * @return void
     */
    public function handle(ChirpCreated $event)
    {
        $event->chirp->user->notify(new NewChirp($event->chirp));
    }
}
