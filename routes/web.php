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


    Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);
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
    //landing page, home
    Route::get('/', 'LandingPageController@index')->name('landing-page');

    //faqja e servisit, contact
    Route::get('/services', 'ServicesController@index')->name('services.index');
    Route::post('/services/send', 'ServicesController@send')->name('services.send');


    //page that holds all the products
    Route::get('/shop', 'ShopController@index')->name('shop.index');
    Route::get('/shop/{slug}', 'ShopController@show')->name('shop.show');

    // page of a book
    Route::get('/product', 'BookController@index')->name('product.index');
    Route::get('/product/{slug}', 'BookController@show')->name('product.show');

    //coment section of the book page
    Route::post('comments/{post_id}', 'CommentsController@store')->name('comments.store');


    //cart function of the cart page
    Route::get('/cart', 'BookController@cart')->name('cart.index');
    Route::get('/add-to-cart/{ISBN}', 'BookController@addToCart')->name('cart.add');
    Route::patch('update-cart', 'BookController@update')->name('cart.update');
    Route::delete('remove-from-cart', 'BookController@remove')->name('cart.remove');

    //checkout page
    Route::get('/checkout', 'BookController@getCheckout')->name('checkout.index')->middleware('auth');


    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
    Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

    //confirmation page after checkout
    Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');



