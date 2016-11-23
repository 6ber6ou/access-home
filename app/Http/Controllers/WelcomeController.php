<?php namespace AH\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
	{

	public function index()
		{

		return view( 'welcome' );

		}

	}
