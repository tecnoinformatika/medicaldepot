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
Route::get('/shopCart', 'navController@shopCart')->name('shopCart');
Route::get('/registerAccount', 'navController@registerUSer')->name('registerAccount');
