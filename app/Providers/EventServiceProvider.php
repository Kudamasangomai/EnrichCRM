<?php

namespace App\Providers;

use App\Events\Clientdeleted;
use App\Events\ProjectAssigned;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\Clientdeletednotification;
use App\Listeners\sendemailtoProjectAssigneduser;
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

        // The event
        Clientdeleted::class => [
            // the listener,
            Clientdeletednotification::class,
        ],

           // The event
           ProjectAssigned::class => [
            // the listener,
            sendemailtoProjectAssigneduser::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
