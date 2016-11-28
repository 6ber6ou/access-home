<?php namespace AH\Http\Controllers\Language;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use \Cookie;

class LanguageController extends Controller
	{

	public function chooser( Request $request )
		{

		$cookie = cookie( 'locale', $request->input( 'locale' ), 525600 );

		return redirect()->back()->withCookie( $cookie );

		}

	}
