<?php namespace AH\Http\Controllers\Auth;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Http\Requests\LoginUserRequest;
use Sentinel;

class LoginController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.auth', [ 'only' => [ 'logout' ] ] );
		$this->middleware( 'sentinel.guest', [ 'except' => [ 'logout' ] ] );

		}

	// ------------------------------------------------------------

	public function login()
		{

		show_notification();

		$page = 'login';

		return view( 'auth.login', compact( 'page' ) );

		}

	// ------------------------------------------------------------

	public function post_login( LoginUserRequest $request )
		{

		Sentinel::authenticateAndRemember( $request->all() );

		if( ! Sentinel::check() )
			{

			return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.login-error-notification' ) );

			}

		return redirect()->route( 'adds' )->with( 'message', 'success|' . trans( 'webpage-text.login-success-notification' ) );

		}

	// ------------------------------------------------------------

	public function logout()
		{

		Sentinel::logout();

		return redirect()->route( 'login' )->with( 'message', 'success|' . trans( 'webpage-text.logout-success-notification' ) );

		}

	}
