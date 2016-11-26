<?php namespace AH\Http\Controllers;

use Illuminate\Http\Request;

use AH\Mail\ContactMail;
use GuzzleHttp\Client;
use Illuminate\Mail\Mailer;

class ContactController extends Controller
    {

    public function index( Request $request, Mailer $mailer )
        {

        if( ! $request->input( 'address' ) )
            {

            $name = $request->input( 'name' );
            $email = $request->input( 'email' );
            $body = $request->input( 'body' );
            $token = $request->input( 'g-recaptcha-response' );

            if( $token )
                {

                $client = new Client();
                $response = $client->post( 'https://www.google.com/recaptcha/api/siteverify',
                    [

                    'form_params' =>
                        [

                        'secret' => env( 'RECAPTCHA_SECRET_KEY' ),
                        'response' => $token

                        ]

                    ] );

                $result = json_decode( $response->getBody()->getContents() );

                if( $result->success )
                    {

                    $mailer->to( config( 'mail.from.address' ) )
                           ->queue( new ContactMail( $name, $email, $body ) );

                    return redirect()->back()->with( 'message', 'success|' . trans( 'webpage-text.contact-success-notification' ) );

                    }
                else
                    {

                    // dd( $result->error_codes );
                    // dd( 'Robot...' );

                    return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.contact-error-notification' ) );

                    }

                }

            }

        }

    }
