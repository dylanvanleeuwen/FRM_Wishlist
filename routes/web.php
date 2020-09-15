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

// Non Auth Secured routes
Route::get('/users', 'WishlistController@index')->name('users');
Route::get('/wishlist/{id}', 'WishlistController@userswishlist')->name('wishlist');
Route::get('/', 'Controller@index');
Auth::routes();

// Auth secured routes
Route::get('/home', 'WishlistController@IsAdmin')->name('home')->middleware('auth');

Route::get('/grud', 'WishlistController@grud')->name('grud')->middleware('auth');
Route::get('/admingrud', 'WishlistController@admingrud')->name('admingrud')->middleware('auth');
Route::get('/wish/deletewish/{id}','WishlistController@deletewish')->name('deletewish')->middleware('auth');
Route::get('/wish/editwish/{id}','WishlistController@editwish')->name('editwish')->middleware('auth');
Route::post('/wish/editwishpost/{id}','WishlistController@editwishpost')->name('editwishpost')->middleware('auth');
Route::get('/wish/addwish','WishlistController@addwish')->name('addwish')->middleware('auth');
Route::post('wish/addwishpost','WishlistController@addwishpost')->name('addwishpost')->middleware('auth');



