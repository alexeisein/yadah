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

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('about', 'PagesController@about')->name('pages.about');
Route::get('contact', 'PagesController@getContact')->name('pages.contact');
Route::post('contact', 'PagesController@postContact')->name('pages.contact');

Route::prefix('admin')->group(function(){
	Route::get('/', 'HomeController@index');
	Route::resource('event', 'EventsController');
	Route::resource('blog', 'BlogController');
	Route::resource('category', 'CategoryController', ['except' =>['show']]);
	Route::resource('tag', 'TagController', ['except' =>['show']]);
});


Auth::routes();

// Route::group('middleware' => ['web'[]]);
