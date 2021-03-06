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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirts/{product}', 'FrontController@shirt')->name('shirt');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
   

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::post('product/image-upload/{productId}','ProductsController@uploadImages');
    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

    Route::get('orders/{type?}', 'OrderController@Orders');

});
// Route::get('pembayaran','AddressController@payment');

//Route::get('checkout','CheckoutController@step1');
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@index');
    Route::post('shipping-info','CheckoutController@store')->name('checkout.shipping');
    Route::get('payment','AddressController@index')->name('front.payment');
    Route::get('/email', function () {
        return view('email');
    });
    Route::post('/sendEmail', 'Email@sendEmail');

    Route::resource('review','ProductReviewController');
});



Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});
