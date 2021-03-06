<?php namespace AH\Http\Controllers\Contact;

use Illuminate\Http\Request;
use AH\Http\Controllers\Controller;

use AH\Http\Requests\SendContactEmailRequest;
use AH\Mail\ContactMail;
use GuzzleHttp\Client;
use Illuminate\Mail\Mailer;

class ContactController extends Controller
    {

    public function index( SendContactEmailRequest $request, Mailer $mailer )
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

                    $this->sendEmail( $mailer, $name, $email, $body );

                    return redirect( '/#contact' )->with( 'message', 'success|' . trans( 'webpage-text.contact-success-notification' ) );

                    }
                else
                    {

                    // dd( $result->error_codes );
                    // dd( 'Robot...' );

                    return redirect()->back()->with( 'message', 'error|' . trans( 'webpage-text.contact-error-notification' ) );

                    }

                }

            else
                {

                $this->sendEmail( $mailer, $name, $email, $body );

                return redirect( '/#contact' )->with( 'message', 'success|' . trans( 'webpage-text.contact-success-notification' ) );

                }

            }

        }

    // ============================================================

    private function sendEmail( $mailer, $name, $email, $body )
        {

        $mailer->to( config( 'mail.from.address' ) )
               ->send( new ContactMail( $name, $email, $body ) );

        }

    }
