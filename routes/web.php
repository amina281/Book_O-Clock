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

    Route::get('/', function () {
        return view('AuthFolder.register');
    });

    Route::get('/register', 'RegisterController@index');
    Route::post('/register', 'RegisterController@store');
    Route::post('/register/check', 'RegisterController@check')->name('email_available.check');
    Route::post('/register-update', 'RegisterController@updateEmail');
    Route::get('/{token}/{email}/register', 'RegisterController@getInfo');


    Route::get('/login', [ 'as' => 'login', 'uses' => 'LoginController@index']);
    Route::post('/login', 'LoginController@store');
    Route::get('/logout', 'LoginController@logout')->middleware('auth');
    Route::get('/home', 'LoginController@HomePage')->middleware('auth');


    Route::get('/forget-password', 'ForgotPasswordController@getEmail');
    Route::post('/forget-password', 'ForgotPasswordController@postEmail');

    Route::get('/{token}/reset-password', 'ResetPasswordController@getPassword');
    Route::post('/reset-password', 'ResetPasswordController@updatePassword');

    Route::get('/user', 'UserProfileController@GetUserData')->middleware('auth');
    Route::post('/userUpdate', 'UserProfileController@update')->name('userUpdate')->middleware('auth');

    Route::post('/data/users','AdminController@getUsers')->name('dataProcessing');
    Route::get('/adminArea', 'AdminController@index')->middleware('auth');

    Route::resource('/post','AdminController');

    Route::post('/addUser','AdminController@addUser');
    Route::post('/editUser','AdminController@editUser');
    Route::post('deleteUser','AdminController@deleteUser');

});


/*Route::get('/', 'LandingPageController@index')->name('landing-page');*/

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');
