<?php namespace AH\Http\Controllers\Auth;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

class LoginController extends Controller
	{

	public function login()
		{

		show_notification();

		return view( 'auth.login' );

		}

	// ------------------------------------------------------------

	public function post_login()
		{



		}

	}
