<?php


Route::get('/', 'PagesController@main')->name('main');
Route::get('/advertising', 'PagesController@advertising')->name('advertising');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('info', 'InfoController');
    Route::resource('price-blocks', 'PriceBlockController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
