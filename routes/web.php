<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('login/github', 'OAuthLoginController@redirectToProvider');
Route::get('login/github/callback', 'OAuthLoginController@handleProviderCallback');


//Twitter
Route::get('auth/twitter', 'OAuthLoginController@getAuth');
Route::get('auth/callback/twitter', 'OAuthLoginController@authCallback');
//Facebook
Route::get('auth/facebook', 'OAuthLoginController@getAuth');
Route::get('auth/callback/facebook', 'OAuthLoginController@authCallback');
//Google
Route::get('auth/google', 'OAuthLoginController@getAuth');
Route::get('auth/callback/google', 'OAuthLoginController@authCallback');
