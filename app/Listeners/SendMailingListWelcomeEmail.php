<?php

namespace App\Listeners;

use App\Events\SubscribedToMailingList;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Mail;

use App\Mail\SubscriptionEmail;

class SendMailingListWelcomeEmail implements ShouldQueue
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
     * @param  SubscribedToMailingList  $event
     * @return void
     */
    public function handle(SubscribedToMailingList $event)
    {
        $subscribed_email = $event->subscribed_email;

        // WIP

        // Mail::to($subscribed_email->email)
        //     ->send(new SubscriptionEmail('test message'));
    }
}
