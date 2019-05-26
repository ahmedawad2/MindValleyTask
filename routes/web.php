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

Route::get('/admin', 'HomeController@index')->name('admin_home');

Route::get('/', function () {
    return 'frontend here !';
})->name('home');


Auth::routes();

Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin'
], function () {
    Route::resource('articles', 'ArticlesController');
});

