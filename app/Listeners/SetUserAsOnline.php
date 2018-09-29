<?php

namespace App\Listeners;

use App\Events\UserJoined;

class SetUserAsOnline
{
    /**
     * Handle the event.
     *
     * @param  UserJoined  $event
     * @return void
     */
    public function handle(UserJoined $event)
    {
        $user = $event->getUser();
        $user->is_online = true;
        $user->save();
    }
}
