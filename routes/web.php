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


Route::get('/add-contact', 'ProductsController@ShowAddContactForm')->name('products.add');
Route::post('/add', 'ProductsController@AddContact')->name('products.save');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('products/{product}', 'ProductsController@show');