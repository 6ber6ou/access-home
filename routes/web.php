<?php

// *******
// WELCOME
// *******

Route::get( '/', [ 'as' => 'welcome', 'uses' => 'WelcomeController@index' ] );

// ------------------------------------------------------------

// **************
// AUTHENTICATION
// **************

Route::get( '/register', [ 'as' => 'register', 'uses' => 'Auth\RegistrationController@register' ] );
Route::post( '/register', [ 'as' => 'post-register', 'uses' => 'Auth\RegistrationController@post_register' ] );

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
