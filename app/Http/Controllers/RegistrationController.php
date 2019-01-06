<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class RegistrationController extends Controller
{
    public function getSignUp()
    {
    	$user = Auth::user();

    	if ($user === null || $user->is_admin !== 1) {
    		abort(404);
    	}

    	return view('registration.sign-up');
    }
}
