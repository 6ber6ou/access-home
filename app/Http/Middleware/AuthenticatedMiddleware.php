<?php namespace AH\Http\Middleware;

use Closure;

use Sentinel;

class AuthenticatedMiddleware
    {

    public function handle( $request, Closure $next )
        {

        if( Sentinel::check() )
            {

            return $next( $request );

            }

        return redirect()->route( 'welcome' )->with( 'message', 'error|' . trans( 'webpage-text.authenticated-error-notification' ) );

        }

    }
