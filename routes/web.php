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

Route::get('/category/{id}','ArticleController@getByCategory')->name('articles_by_category');
Route::get('/get-first/category/{id}','ArticleController@getFirstByCategory')->name('articles_by_category');
