<?php

namespace App\Classes;

class Hasher
{
	public function makeUnsubscribeHash($email)
	{
		$secret = env('UNSUBSCRIBE_HASH_SECRET');
		$message = $secret . $email;

		return hash_hmac('sha256', $message, $secret);
	}
}