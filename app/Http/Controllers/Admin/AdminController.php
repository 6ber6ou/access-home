<?php namespace AH\Http\Controllers\Admin;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

class AdminController extends Controller
	{

	public function __construct()
		{

		$this->middleware( 'sentinel.admin' );

		}

	// ------------------------------------------------------------

	public function index()
		{

		show_notification();

		$page = 'admin';

		return view( 'admin.index', compact( 'page' ) );

		}

	}
