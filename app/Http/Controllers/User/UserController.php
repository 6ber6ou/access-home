<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Http\Requests\ModifyUserProfileRequest;
use AH\User;
use Sentinel;

class UserController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.auth' );

		}

	// ------------------------------------------------------------

	public function profil()
		{

		show_notification();

		$page = 'profil';

		return view( 'users.profil', compact( 'page' ) );

		}

	// ------------------------------------------------------------

	public function post_profile( ModifyUserProfileRequest $request )
		{

		try
			{

		    $user = Sentinel::findUserById( Sentinel::getUser()->id );
		    $user->username = $request->input( 'username' );
		    $user->email = $request->input( 'email' );

		    if( $user->save() )
		    	{

				return redirect()->back()->with( 'message', 'success|' . trans( 'webpage-text.user-update-notification' ) );

		    	}
		    else
		    	{



		    	}

			}
		catch( Cartalyst\Sentry\Users\UserNotFoundException $e )
			{

			return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.user-update-not-found-notification' ) );

			}

		}

	}
