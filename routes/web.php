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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('usermanagement');
Route::get('/users/add', 'UsersController@create')->name('adduser');
Route::post('/users/add', 'UsersController@store')->name('storeuser');
Route::get('shopitems','ShopItemController@index')->name('shopitemsindex');
Route::get('shopitems/add','ShopItemController@create')->name('shopitemsindex');
Route::post('shopitems','ShopItemController@store')->name('shopitemscreate');

//Records mgt
Route::get('sales','RecordsController@index');
Route::get('sales/add','RecordsController@create');
Route::post('sales/add','RecordsController@store');
Route::resource('purchases','PurchasesController');



