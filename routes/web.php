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
Route::redirect('opennbox', '/opennbox/console/admin', 301);
Route::redirect('opennbox/console', '/opennbox/console/admin', 301);
Route::group(['prefix' => 'opennbox/console/admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', 'BlogController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('post/{post}', 'BlogController@show');
Route::get('{slug}', 'PagesController@show');
