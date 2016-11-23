<?php

// *******
// WELCOME
// *******

Route::get( '/', [ 'as' => 'welcome', 'uses' => 'WelcomeController@index' ] );

// ------------------------------------------------------------

// **************
// AUTHENTICATION
// **************

Auth::routes();

// ------------------------------------------------------------

// ****
// HOME
// ****

Route::get( '/home', 'HomeController@index' );
