<?php namespace AH\Http\Controllers;

use Illuminate\Http\Request;

use JavaScript;

class WelcomeController extends Controller
	{

	public function index()
		{

		if( session()->has( 'message' ) )
			{

			JavaScript::put(
				[

				'message' => session( 'message' )

				] );

			}

		return view( 'welcome' );

		}

	}
