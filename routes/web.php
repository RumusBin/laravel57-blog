<?php


Route::get('/', 'PagesController@main')->name('main');
Route::get('/advertising', 'PagesController@advertising')->name('advertising');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');

Route::resource('categories', 'CategoryController');
Route::resource('posts', 'PostController');
Route::resource('info', 'InfoController');
Route::resource('price-blocks', 'PriceBlockController');