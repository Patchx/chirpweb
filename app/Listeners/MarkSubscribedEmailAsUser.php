<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Auth\Events\Registered;

use App\SubscribedEmail;

use App\Classes\Factories\SubscribedEmailFactory;

class MarkSubscribedEmailAsUser
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
    public function handle(Registered $event)
    {
        $email = $event->user->email;

        $subscribed_email = SubscribedEmail::where('email', $email)
                                           ->first();

        if ($subscribed_email === null) {
            (new SubscribedEmailFactory)->create($email, 1);
        } else {
            $subscribed_email->is_user = 1;
            $subscribed_email->save();
        }
    }
}
