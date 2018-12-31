<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $unsubscribe_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($unsubscribe_url)
    {
        $this->unsubscribe_url = $unsubscribe_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('news@chirpmyride.com')
                    ->subject('Thanks for Subscribing!')
                    ->view('emails.subscription_confirmation');
    }
}
