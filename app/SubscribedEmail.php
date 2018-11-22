<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscribedEmail extends Model
{
	protected $table = 'subscribed_emails';

    protected $fillable = [
        'created_date', 
        'email',
        'is_user',
    ];
}
