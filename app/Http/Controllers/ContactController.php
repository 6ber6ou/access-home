<?php namespace AH\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Mail\Mailer;
use AH\Mail\ContactMail;

class ContactController extends Controller
    {

    public function index( Request $request, Mailer $mailer )
        {

        if( ! $request->input( 'address' ) )
            {

            $name = $request->input( 'name' );
            $email = $request->input( 'email' );
            $body = $request->input( 'body' );

            $mailer->to( config( 'mail.from.address' ) )
                   ->send( new ContactMail( $name, $email, $body ) );

            }

        return redirect()->back();

        }

    }
