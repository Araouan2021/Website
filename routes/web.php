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

Route::get('products', 'ProductController@getProduct');
Route::post('products', 'ProductController@saveProduct');

Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

Route::get('home', function()
{
    return View::make('pages.home');
});

Route::get('about_us', function()
{
    return View::make('pages.about_us');
});

Route::get('shop', function()
{
    return View::make('pages.shop');
});

Route::get('blog', function()
{
	return View::make('pages.blog');
});

Route::get('nav', function()
{
    return View::make('layouts.nav');
});

Route::get('uploadfile','HomeController@uploadfile');

Route::post('uploadfile','HomeController@uploadFilePost');

Route::get('/', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/add', 'CartController@add')->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear', 'CartController@clear')->name('cart.clear');

