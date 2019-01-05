<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscribeEmailRequest;

use App\Events\SubscribedToMailingList;

use App\User;
use App\SubscribedEmail;

class StaticPageController extends Controller
{
    public function getIndex()
    {
    	return view('welcome');
    }

    public function getConfirmSubscribed()
    {
    	return view('confirm_subscribed');
    }

    public function postSubscribeEmail(SubscribeEmailRequest $request)
    {
    	$redirect_url = '/confirm-subscribed';

    	$subscribed_email = SubscribedEmail::where('email', $request->email)
                                           ->first();

    	if ($subscribed_email !== null) {
    		return redirect($redirect_url);
    	}

        $subscribed_email = SubscribedEmail::onlyTrashed()
                                           ->where('email', $request->email)
                                           ->first();

        if ($subscribed_email !== null) {
            $subscribed_email->restore();
            event(new SubscribedToMailingList($subscribed_email));
            return redirect($redirect_url);
        }

    	$user = User::where('email', $request->email)->first();

    	if ($user !== null) {
    		return redirect($redirect_url);
    	}

		$subscribed_email = SubscribedEmail::create([
			'created_date' => now()->toDateString(),
			'email' => $request->email,
		]);

        event(new SubscribedToMailingList($subscribed_email));

    	return redirect($redirect_url);
    }
}
