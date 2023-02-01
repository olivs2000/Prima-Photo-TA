<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewUserNotification
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
    public function handle($event)
    {
        $collaborate = Collaborate::whereHas('roles', function ($query) {
                $query->where('id', 1);
            })->get();

        Notification::send($collaborate, new NewUserNotification($event->collaborate));
    }
}
