<?php namespace AH\Http\Middleware;

use Closure;

class SetLocale
    {

    public function handle( $request, Closure $next )
        {

        app()->setLocale( $request->cookie( 'locale' ) );

        return $next( $request );

        }

    }
