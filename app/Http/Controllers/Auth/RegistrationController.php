<?php namespace AH\Http\Controllers\Auth;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Http\Requests\CreateUserRequest;
use Sentinel;

class RegistrationController extends Controller
	{

	public function register()
		{

		show_notification();

		return view( 'auth.register' );

		}

	// ------------------------------------------------------------

	public function post_register( CreateUserRequest $request )
		{

		$user = Sentinel::registerAndActivate( $request->all() );

		return redirect()->route( 'register' )->with( 'message', 'success|' . trans( 'webpage-text.register-success-notification' ) );

		}

	}
