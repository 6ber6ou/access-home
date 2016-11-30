<?php namespace AH;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelUser;
use Illuminate\Notifications\Notifiable;

class User extends SentinelUser
	{

	use Notifiable;

    protected $fillable = [ 'username', 'email', 'password', 'avatar', 'permissions' ];

    protected $loginNames = [ 'username' ];

	}
