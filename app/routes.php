<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::controller('account', 'AccountController');

Route::get('social/auth/{network?}', 'SocialController@auth');
Route::get('social/callback', 'SocialController@callback');

Route::get('social/auth/{network?}/int_callback', 'SocialController@auth');
Route::get('social/auth/{network?}/oauth2callback', 'SocialController@auth');
Route::get('social/auth/{network?}/oauth_callback', 'SocialController@auth');

Route::get('/', 'HomeController@showIndex');
