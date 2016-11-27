<?php namespace AH\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
	{

	public function index()
		{

		show_notification();

		return view( 'welcome' );

		}

	}
