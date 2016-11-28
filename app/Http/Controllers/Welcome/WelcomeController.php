<?php namespace AH\Http\Controllers\Welcome;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

class WelcomeController extends Controller
	{

	public function index()
		{

		show_notification();

		return view( 'welcome.index' );

		}

	}
