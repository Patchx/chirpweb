<?php

namespace App\Classes;

class Hasher
{
	public function makeUnsubscribeHash(\App\SubscribedEmail $subscribed_email)
	{
		$common_secret = env('UNSUBSCRIBE_HASH_SECRET');
		$unique_secret = $subscribed_email->unsubscribe_secret;
		$message = $common_secret . $subscribed_email->email . $unique_secret;

		return hash_hmac('sha256', $message, $common_secret);
	}
}