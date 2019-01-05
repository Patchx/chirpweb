<?php

namespace App\Classes\Factories;

use App\SubscribedEmail;

class SubscribedEmailFactory
{
	public function create($email, $is_user=0)
	{
        return SubscribedEmail::create([
            'created_date' => now()->toDateString(),
            'email' => $email,
            'is_user' => $is_user,
            'unsubscribe_secret' => uniqid('uns'),
        ]);
	}
}