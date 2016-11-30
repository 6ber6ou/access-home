<?php namespace AH\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ActivateAccount extends Notification
    {

    use Queueable;

    // ------------------------------------------------------------

    public $code;

    // ------------------------------------------------------------

    public function __construct( $code )
        {

        $this->code = $code;

        }

    // ------------------------------------------------------------

    public function via( $notifiable )
        {

        return [ 'mail' ];

        }

    // ------------------------------------------------------------

    public function toMail( $notifiable )
        {

        return ( new MailMessage )
                    ->subject( trans( 'webpage-text.email-account-activation-subject' ) )
                    ->line( trans( 'webpage-text.email-account-activation-line-1' ) )
                    ->action( trans( 'webpage-text.email-account-activation-link-text' ), url( '/activate/' . $notifiable->email . '/' . $this->code ) )
                    ->line( '' );
        }


    // ------------------------------------------------------------

    public function toArray( $notifiable )
        {
        return
            [
            ];

        }

    }
