<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/store_category', 'HomeController@store_category')->name('store_category');
Route::patch('/update_category/{id}', 'HomeController@update_category')->name('update_category');
Route::delete('/delete_category/{id}', 'HomeController@delete_category')->name('delete_category');

Route::post('/store_product', 'HomeController@store_product')->name('store_product');
Route::patch('/update_product/{id}', 'HomeController@update_product')->name('update_product');
Route::delete('/delete_product/{id}', 'HomeController@delete_product')->name('delete_product');
