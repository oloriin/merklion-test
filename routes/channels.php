<?php

use \Illuminate\Support\Facades\Broadcast;
use \Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('chat', function () {
    return Auth::check();
});

Broadcast::channel('chat.members', function ($user) {
    return ['user' => $user];
});
