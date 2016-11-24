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

// *******
// CONTACT
// *******

Route::post( '/contact', [ 'as' => 'post-contact', 'uses' => 'ContactController@index' ] );

// ------------------------------------------------------------

// ****
// HOME
// ****

Route::get( '/home', 'HomeController@index' );

// ------------------------------------------------------------

// ********
// LANGUAGE
// ********

Route::post( '/language', [ 'as' => 'language-chooser', 'uses' => 'LanguageController@chooser' ] );
