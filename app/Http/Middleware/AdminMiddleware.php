<?php namespace AH\Http\Middleware;

use Closure;

use Sentinel;

class AdminMiddleware
    {

    public function handle( $request, Closure $next )
        {

        if( Sentinel::check() )
            {

            if( Sentinel::getUser()->roles()->first()->slug == 'admin' )
                {

                return $next( $request );

                }

            }

        return redirect( '/' )->with( 'message', 'error|' . trans( 'webpage-text.admin-error-notification' ) );

        }

    }
