<?php

namespace App\Listeners;

use App\Events\UserLeft;

class SetUserAsOffline
{
    /**
     * Handle the event.
     *
     * @param  UserLeft  $event
     * @return void
     */
    public function handle(UserLeft $event)
    {
        $user = $event->getUser();
        $user->is_online = false;
        $user->save();
    }
}
