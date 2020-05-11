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

Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('shop', function()
{
    return View::make('pages.shop');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
