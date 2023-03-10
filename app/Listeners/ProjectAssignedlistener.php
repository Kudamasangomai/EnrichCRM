<?php

namespace App\Listeners;

use App\Mail\ProjectAssignedEmail;
use App\Events\ProjectAssignedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectAssignedlistener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProjectAssignedEvent  $event
     * @return void
     */
    public function handle(ProjectAssignedEvent $event)
    {
        Mail::to($event->email)->send(new ProjectAssignedEmail());
    }
}
