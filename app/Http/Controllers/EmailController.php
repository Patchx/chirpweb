<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes\Hasher;

use App\SubscribedEmail;

class EmailController extends Controller
{
    public function getUnsubscribed(
    	Hasher $hasher,
    	Request $request
    ) {
    	$request_email = $request->email;
        $subscribed_email = SubscribedEmail::where('email', $request_email)->first();

        if ($subscribed_email === null) {
            return view('confirm_unsubscribed');
        }

    	$generated_hash = $hasher->makeUnsubscribeHash($subscribed_email);

    	if ($request->hash === $generated_hash) {    		
    		$subscribed_email->delete();
    	}

    	return view('confirm_unsubscribed');
    }
}
