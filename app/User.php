<?php namespace AH;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;

class User extends SentinelUser
	{

    protected $fillable =
    	[

        'username',
        'email',
        'password',
        'permissions'

    	];

    protected $loginNames = [ 'username' ];

	}
