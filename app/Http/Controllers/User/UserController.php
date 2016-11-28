<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

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

	}
