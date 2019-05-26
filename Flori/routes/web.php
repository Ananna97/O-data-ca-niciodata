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

Route::view('/', 'index');

Route::view('/index', 'index');

Route::view('/about', 'about');

//Route::view('/products', 'products');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::view('/promotions', 'promotions');

Route::view('/product', 'product');


Route::get('/contact', [
	'uses' => 'ContactController@create'
]);

//post route for contact page

Route::post('/contact', [
	'uses' => 'ContactController@postContact',
	'as' => 'contact.store'
]);


  
Route::get('/cart', 'CartController@create')->name('cart.create');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('empty',function() {
	Cart::destroy();
});


//Login


// Login Routes...
    Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Sign Up Routes...
    Route::get('/signup', ['as' => 'signup', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('/signup', ['as' => 'signup.post', 'uses' => 'Auth\RegisterController@register']);
