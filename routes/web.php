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
Route::group(['middleware' => ['web']], function () {

    Route::get('/register', 'RegisterController@index');
    Route::post('/register', 'RegisterController@store');
    Route::post('/register/check', 'RegisterController@check')->name('email_available.check');
    Route::post('/register-update', 'RegisterController@updateEmail');
    Route::get('/{token}/{email}/register', 'RegisterController@getInfo');


    Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
    Route::post('/login', 'LoginController@store');
    Route::get('/logout', 'LoginController@logout')->middleware('auth');
    Route::get('/home', 'LoginController@HomePage')->middleware('auth');


    Route::get('/forget-password', 'ForgotPasswordController@getEmail');
    Route::post('/forget-password', 'ForgotPasswordController@postEmail');

    Route::get('/{token}/reset-password', 'ResetPasswordController@getPassword');
    Route::post('/reset-password', 'ResetPasswordController@updatePassword');

    Route::get('/user', 'UserProfileController@GetUserData')->middleware('auth');
    Route::post('/userUpdate', 'UserProfileController@update')->name('userUpdate');


    Route::get('/', 'LandingPageController@index')->name('landing-page');

    Route::get('/services', 'ServicesController@index')->name('services.index');
    Route::post('/services/send', 'ServicesController@send')->name('services.send');

    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::get('/shop/{slug}', 'ShopController@show')->name('shop.show');

    Route::get('/product', 'BookController@index')->name('product.index');
    Route::get('/product/{slug}', 'BookController@show')->name('product.show');

    Route::get('/shopping-cart', 'CartController@index')->name('cart.index');
    Route::get('/add-to-cart/{id}', 'CartController@add')->name('cart.add');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout');

    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
    Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

    Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


});



