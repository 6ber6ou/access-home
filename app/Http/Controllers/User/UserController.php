<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Http\Requests\ModifyUserPasswordRequest;
use AH\Http\Requests\ModifyUserProfileRequest;
use AH\User;
use Image;
use Sentinel;

class UserController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.auth' );

		}

	// ------------------------------------------------------------

	public function profile()
		{

		show_notification();

		$page = 'profile';

		return view( 'users.profile', compact( 'page' ) );

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

				return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.user-update-error-notification' ) );

		    	}

			}
		catch( Cartalyst\Sentry\Users\UserNotFoundException $e )
			{

			return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.user-not-found-notification' ) );

			}

		}

	// ------------------------------------------------------------

	public function new_password( ModifyUserPasswordRequest $request )
		{

        $hasher = Sentinel::getHasher();

        $oldPassword = $request->input('old_password');
        $password = $request->input('password');
        $passwordConf = $request->input('password_confirmation');
        $user = Sentinel::getUser();

        if( ! $hasher->check( $oldPassword, $user->password ) )
        	{

			return redirect()->back()->withErrors( [ 'old_password' => trans( 'webpage-text.user-new-password-error-notification' ) ] )->with( 'message', 'error|' . trans( 'webpage-text.invalid-form' ) );

        	}

        Sentinel::update($user, array('password' => $password));

		return redirect()->back()->with( 'message', 'success|' . trans( 'webpage-text.user-new-password-notification' ) );

		}

	// ------------------------------------------------------------

	public function upload_avatar( Request $request )
		{

		// Faire validation pour JPG, GIF, PNG, BMP, TIFF, TGA

		if( $request->hasFile( 'avatar' ) )
			{

			$user = Sentinel::getUser();

			if( ! preg_match( '/default\.jpg/i', $user->avatar ) )
				{

				@unlink( public_path() . $user->avatar );

				}

			$avatar = $request->file( 'avatar' );
			$filename = time() . '.' . $avatar->getClientOriginalExtension();

			Image::make( $avatar )->fit( 128, 128 )->save( public_path( '/uploads/avatars/' ) . $filename );

			$user->avatar = '/uploads/avatars/' . $filename;
			$user->save();

			return redirect()->back()->with( 'message', 'success|' . trans( 'webpage-text.avatar-upload-notification' ) );

			}

		}

	}
