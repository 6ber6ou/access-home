<?php namespace AH\Http\Controllers\Auth;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use Activation;
use AH\User;
use Sentinel;

class ActivationController extends Controller
	{

	public function activate( $email, $code )
		{

		$user = User::where( 'email', $email )->first();

		if( Activation::complete( $user, $code ) )
			{

			return redirect()->route( 'login' )->with( 'message', 'success|' . trans( 'webpage-text.activation-success-notification' ) );

			}
		else
			{

			return redirect()->route( 'login' )->with( 'message', 'error|' . trans( 'webpage-text.activation-success-notification' ) );

			}

		}

	}
