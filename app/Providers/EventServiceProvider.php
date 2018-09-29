<?php

namespace App\Providers;

use App\Events\UserJoined;
use App\Events\UserLeft;
use App\Listeners\SetUserAsOffline;
use App\Listeners\SetUserAsOnline;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserJoined::class => [
            SetUserAsOnline::class,
        ],
        UserLeft::class => [
            SetUserAsOffline::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
