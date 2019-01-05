<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubscribeEmailRequest;

use App\Events\SubscribedToMailingList;

use App\Classes\Factories\SubscribedEmailFactory;

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

    public function postSubscribeEmail(
        SubscribedEmailFactory $email_factory,
        SubscribeEmailRequest $request
    ) {
    	$redirect_url = '/confirm-subscribed';
        $email = $request->email;

    	$subscribed_email = SubscribedEmail::where('email', $email)
                                           ->first();

    	if ($subscribed_email !== null) {
    		return redirect($redirect_url);
    	}

        $subscribed_email = SubscribedEmail::onlyTrashed()
                                           ->where('email', $email)
                                           ->first();

        if ($subscribed_email !== null) {
            $subscribed_email->restore();
            event(new SubscribedToMailingList($subscribed_email));
            return redirect($redirect_url);
        }

    	$user = User::where('email', $email)->first();

    	if ($user !== null) {
    		return redirect($redirect_url);
    	}

        $subscribed_email = $email_factory->create($email, 0);
        event(new SubscribedToMailingList($subscribed_email));

    	return redirect($redirect_url);
    }
}
