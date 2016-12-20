<?php

// ****
// ADDS
// ****

Route::resource( 'ads', 'User\AdsController' );

Route::get( '/my-ads', [ 'as' => 'my-ads', 'uses' => 'User\AdsController@my_adds' ] );

Route::post( '/upload-ad-primary-photo', [ 'as' => 'upload-ad-primary-photo', 'uses' => 'User\AdsController@upload_ad_primary_photo' ] );
Route::post( '/delete-ad-primary-photo', [ 'as' => 'delete-ad-primary-photo', 'uses' => 'User\AdsController@delete_ad_primary_photo' ] );

Route::post( '/upload-ad-photo-1', [ 'as' => 'upload-ad-photo-1', 'uses' => 'User\AdsController@upload_ad_photo_1' ] );
Route::post( '/delete-ad-photo-1', [ 'as' => 'delete-ad-photo-1', 'uses' => 'User\AdsController@delete_ad_photo_1' ] );

Route::post( '/upload-ad-photo-2', [ 'as' => 'upload-ad-photo-2', 'uses' => 'User\AdsController@upload_ad_photo_2' ] );
Route::post( '/delete-ad-photo-2', [ 'as' => 'delete-ad-photo-2', 'uses' => 'User\AdsController@delete_ad_photo_2' ] );

Route::post( '/upload-ad-photo-3', [ 'as' => 'upload-ad-photo-3', 'uses' => 'User\AdsController@upload_ad_photo_3' ] );
Route::post( '/delete-ad-photo-3', [ 'as' => 'delete-ad-photo-3', 'uses' => 'User\AdsController@delete_ad_photo_3' ] );

Route::post( '/upload-ad-photo-4', [ 'as' => 'upload-ad-photo-4', 'uses' => 'User\AdsController@upload_ad_photo_4' ] );
Route::post( '/delete-ad-photo-4', [ 'as' => 'delete-ad-photo-4', 'uses' => 'User\AdsController@delete_ad_photo_4' ] );

Route::post( '/upload-ad-photo-5', [ 'as' => 'upload-ad-photo-5', 'uses' => 'User\AdsController@upload_ad_photo_5' ] );
Route::post( '/delete-ad-photo-5', [ 'as' => 'delete-ad-photo-5', 'uses' => 'User\AdsController@delete_ad_photo_5' ] );

Route::post( '/upload-ad-photo-6', [ 'as' => 'upload-ad-photo-6', 'uses' => 'User\AdsController@upload_ad_photo_6' ] );
Route::post( '/delete-ad-photo-6', [ 'as' => 'delete-ad-photo-6', 'uses' => 'User\AdsController@delete_ad_photo_6' ] );

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
// Route::post( '/exchange-type', [ 'as' => 'exchange-type', 'uses' => 'User\UserController@exchange_type' ] );
Route::post( '/user-description', [ 'as' => 'user-description', 'uses' => 'User\UserController@user_description' ] );

// ------------------------------------------------------------

// *******
// WELCOME
// *******

Route::get( '/', [ 'as' => 'welcome', 'uses' => 'Welcome\WelcomeController@index' ] );

