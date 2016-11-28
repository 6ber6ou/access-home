<?php namespace AH\Http\Controllers\User;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

class AdsController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.auth', [ 'except' => [ 'index' ] ] );

		}

	// ------------------------------------------------------------

	public function index()
		{

		show_notification();

		$page = 'adds';

		return view( 'adds.index', compact( 'page' ) );

		}

	// ------------------------------------------------------------

	public function my_adds()
		{

		show_notification();

		$page = 'my-adds';

		return view( 'adds.my-adds', compact( 'page' ) );

		}

	}
