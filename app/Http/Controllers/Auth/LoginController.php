<?php namespace AH\Http\Controllers\Auth;

use AH\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
    {

    use AuthenticatesUsers;

    // ------------------------------------------------------------

    protected $redirectTo = '/home';

    // ------------------------------------------------------------

    public function __construct()
        {

        $this->middleware( 'guest', [ 'except' => 'logout' ] );

        }

    }
