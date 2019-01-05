<?php

namespace App\Listeners;

use App\Events\SubscribedToMailingList;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;

use App\Mail\SubscriptionEmail;

use App\Classes\Hasher;

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
        $email_address = $event->subscribed_email->email;

        $hash = (new Hasher)->makeUnsubscribeHash($event->subscribed_email);

        $unsubscribe_url = env('APP_URL') 
            . '/mail/unsubscribed'
            . '?email=' . $email_address
            . '&hash=' . $hash;

        Mail::to($email_address)
            ->send(new SubscriptionEmail($unsubscribe_url));
    }
}
