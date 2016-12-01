<?php

// ****
// ADDS
// ****

Route::get( '/adds', [ 'as' => 'adds', 'uses' => 'User\AdsController@index' ] );
Route::get( '/my-adds', [ 'as' => 'my-adds', 'uses' => 'User\AdsController@my_adds' ] );

// ------------------------------------------------------------

// **************
// ADMINISTRATION
// **************

Route::get( '/administration', [ 'as' => 'administration', 'uses' => 'Admin\AdminController@index' ] );

// ------------------------------------------------------------

// **************
// AUTHENTICATION
// **************

Route::get( '/register', [ 'as' => 'register', 'uses' => 'Auth\RegistrationController@register' ] );
Route::post( '/register', [ 'as' => 'post-register', 'uses' => 'Auth\RegistrationController@post_register' ] );

Route::get( '/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login' ] );
Route::post( '/login', [ 'as' => 'post-login', 'uses' => 'Auth\LoginController@post_login' ] );

Route::get( '/reset-password', [ 'as' => 'reset-password', 'uses' => 'Auth\LoginController@reset_password' ] );
Route::post( '/reset-password', [ 'as' => 'post-reset-password', 'uses' => 'Auth\LoginController@post_reset_password' ] );

Route::post( '/logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout' ] );

Route::get( '/activate/{email}/{code}', [ 'as' => 'activate', 'uses' => 'Auth\ActivationController@activate' ] );

// ------------------------------------------------------------

// *******
// CONTACT
// *******

Route::post( '/contact', [ 'as' => 'post-contact', 'uses' => 'Contact\ContactController@index' ] );

// ------------------------------------------------------------

// ********
// LANGUAGE
// ********

Route::post( '/language', [ 'as' => 'language-chooser', 'uses' => 'Language\LanguageController@chooser' ] );

// ------------------------------------------------------------

// ****
// USER
// ****

Route::get( '/profile', [ 'as' => 'profile', 'uses' => 'User\UserController@profile' ] );
Route::post( '/profile', [ 'as' => 'post-profile', 'uses' => 'User\UserController@post_profile' ] );
Route::post( '/new-password', [ 'as' => 'new-password', 'uses' => 'User\UserController@new_password' ] );
Route::post( '/upload-avatar', [ 'as' => 'upload-avatar', 'uses' => 'User\UserController@upload_avatar' ] );

// ------------------------------------------------------------

// *******
// WELCOME
// *******

Route::get( '/', [ 'as' => 'welcome', 'uses' => 'Welcome\WelcomeController@index' ] );

