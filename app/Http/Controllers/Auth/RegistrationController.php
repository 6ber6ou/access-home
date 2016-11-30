<?php namespace AH\Http\Controllers\Auth;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use Activation;
use AH\Http\Requests\CreateUserRequest;
use AH\Notifications\ActivateAccount;
use AH\User;
use Sentinel;

class RegistrationController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.guest' );

		}

	// ------------------------------------------------------------

	public function register()
		{

		show_notification();

		$page = 'register';

		return view( 'auth.register', compact( 'page' ) );

		}

	// ------------------------------------------------------------

	public function post_register( CreateUserRequest $request )
		{

		$user = Sentinel::register( $request->all() );
		$activation = Activation::create( $user );
		$code = $activation->code;

		$role = Sentinel::findRoleBySlug( 'user' );

		$role->users()->attach( $user );

		$user->notify( new ActivateAccount( $code ) );

		return redirect()->route( 'login' )->with( 'message', 'success|' . trans( 'webpage-text.register-success-notification' ) );

		}

	}
