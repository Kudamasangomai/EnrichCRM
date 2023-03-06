<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\Project;
use App\Events\ProjectAssigned;
use App\Mail\ProjectAssigned as MailProjectAssigned;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendemailtoProjectAssigneduser
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
     * @param  object  $event
     * @return void
     */
    public function handle(ProjectAssigned $event)
    {
        $user = User::Where($event->user);
        $p = Project::find($event->project); 
        dd($user) ;
        // Mail::to($user->email)->send(new MailProjectAssigned());
    }
}
