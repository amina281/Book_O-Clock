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
    return view('/AuthFolder/register');
});

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');
Route::post('/register/check', 'RegisterController@check')->name('email_available.check');
Route::post('/register-update', 'RegisterController@updateEmail');
Route::get('/{token}/{email}/register', 'RegisterController@getInfo');
Route::get('/User','UserController@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@store');
Route::get('/logout',  'LoginController@logout');

Route::get('/forget-password', 'ForgotPasswordController@getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail');

Route::get('/{token}/reset-password', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');


