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

Route::get('contact_us', 'ContactController@getContact');
Route::post('contact_us', 'ContactController@saveContact');

Route::get('home', function()
{
    return View::make('pages.home');
});

Route::get('about_us', function()
{
    return View::make('pages.about');
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



