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


 
Route::get('/cart', [
	'uses' => 'CartController@create'
]);


//Login


Auth::routes();

Route::get('/home', 'HomeController@index');