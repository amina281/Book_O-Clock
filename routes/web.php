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
    return view('custom.register');
});

Route::get('custom-register','CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('custom-register','CustomAuthController@register');

Route::get('custom-login',  'AuthController@loginForm')->name('custom.login');
Route::post('custom-login',  'AuthController@login');

Route::get('/logout',  'AuthController@logout');


Route::get('/dashboard', 'HomeController@dashboard');