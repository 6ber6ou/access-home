<?php namespace AH\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
    {

    use Queueable, SerializesModels;

    // ------------------------------------------------------------

    public $name;
    public $email;
    public $body;

    // ------------------------------------------------------------

    public function __construct( $name, $email, $body )
        {

        $this->name = $name;
        $this->email = $email;
        $this->body = $body;

        }

    // ------------------------------------------------------------

    public function build()
        {

        return $this->from( config( 'mail.from.address' ) )
                    ->subject( 'Contact e-mail' )
                    ->view( 'emails.contact',
                        [

                        'name' => $this->name,
                        'email' => $this->email,
                        'body' => $this->body

                        ] );

        }

    }
