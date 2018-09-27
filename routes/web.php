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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'welcome');
Route::get('/show', 'ShowPageController@index')->name('show-page');
//Route::view('/product', 'product');
//Route::view('/cart', 'cart');
//Route::view('/checkout', 'checkout');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
