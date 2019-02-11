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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    
    Route::prefix('admin')->namespace('Admin')->group(function () {

        Route::prefix('products')->group(function(){
            Route::get('/', 'ProductController@index')->name('product.index');
            Route::get('new', 'ProductController@new')->name('product.new');
            Route::post('store', 'ProductController@store')->name('product.store');;
            Route::get('edit/{product}', 'ProductController@edit')->name('product.edit');
            Route::post('update/{id}', 'ProductController@update')->name('product.update');
            Route::get('remove/{id}', 'ProductController@delete')->name('product.remove');
        });

    });
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
