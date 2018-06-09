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

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('welcome');


Route::get('/aboutUs', 'navController@aboutUs')->name('aboutUs');
Route::get('/contact', 'navController@contact')->name('contact');
Route::get('/shopProducts', 'navController@shopProducts')->name('shopProducts');
Route::POST('/ProductDetails', 'navController@ProductDetails')->name('ProductDetails');
Route::get('/shopCart', 'navController@shopCart')->name('shopCart');
Route::get('/registerAccount', 'navController@registerUSer')->name('registerAccount');

//shoping cart 
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@add')->name('cart.add');
Route::get('/cart/details','CartController@details')->name('cart.details');
Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');
Route::group(['prefix' => 'wishlist'],function()
{
    Route::get('/','WishListController@index')->name('wishlist.index');
    Route::post('/','WishListController@add')->name('wishlist.add');
    Route::get('/details','WishListController@details')->name('wishlist.details');
    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
});
