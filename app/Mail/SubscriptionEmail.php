<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $test_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($test_data='')
    {
        $this->test_data = $test_data;
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
