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

    Route::get('AdminSection', function(){
        return View('AuthFolder.admin');
    });

    Route::get('/AdminProfileData','AdminController@GetAdminData');
    Route::post('/AdminUpdate', 'AdminController@update')->name('adminUpdate')->middleware('auth');

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

    Route::resource('/bookpost','BookManagmentController');

    Route::post('/addBook','BookManagmentController@addBook');
    Route::post('/editBook','BookManagmentController@editBook');
    Route::post('deleteBook','BookManagmentController@deleteBook');

    Route::resource('/categorypost','CategoryManagmentController');

    Route::post('/addCategory','CategoryManagmentController@addCategory');
    Route::post('/editCategory','CategoryManagmentController@editCategory');
    Route::post('deleteCategory','CategoryManagmentController@deleteCategory');

    Route::resource('/authorpost','AuthorManagmentController');

    Route::post('/addAuthor','AuthorManagmentController@addAuthor');
    Route::post('/editAuthor','AuthorManagmentController@editAuthor');
    Route::post('deleteAuthor','AuthorManagmentController@deleteAuthor');

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
    Route::post('comments/{book}', 'CommentController@store')->name('comments.store');

    //bookshelf page
    Route::get('bookshelf', 'BookshelfController@index')->name('bookshelf.index');
    Route::post('bookshelf/{book_id}', 'BookshelfController@store')->name('bookshelf.store');

    //cart function of the cart page
    Route::get('/cart', 'BookController@cart')->name('cart.index');
    Route::get('/cart/{ISBN}', 'BookController@addToCart')->name('shop.add');
    Route::patch('update-cart', 'BookController@update')->name('cart.update');
    Route::delete('remove_from_cart', 'BookController@remove')->name('cart.remove');

    //checkout page
    Route::get('/checkout', 'BookController@getCheckout')->name('checkout.index')->middleware('auth');


    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
    Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');

    //confirmation page after checkout
    Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');





