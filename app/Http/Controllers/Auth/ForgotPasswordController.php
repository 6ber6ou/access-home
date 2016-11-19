<?php namespace AH\Http\Controllers\Auth;

use AH\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
    {

    use SendsPasswordResetEmails;

    // ------------------------------------------------------------

    public function __construct()
        {

        $this->middleware( 'guest' );

        }

    }
