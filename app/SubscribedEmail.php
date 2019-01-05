<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class SubscribedEmail extends Model
{
	use SoftDeletes;

	protected $table = 'subscribed_emails';

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'created_date', 
        'email',
        'is_user',
        'unsubscribe_secret',
    ];
}
