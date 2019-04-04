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

Route::get('/contact', [
	'uses' => 'ContactController@create'
]);

Route::get('/index', [
	'uses' => 'IndexController@create'
]);

Route::get('/about', [
	'uses' => 'AboutController@create'
]);

Route::get('/products', [
	'uses' => 'ProductsController@create'
]);

Route::get('/promotions', [
	'uses' => 'PromotionsController@create'
]);