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
    return view('main');
});

Route::get('/articles','ArticleController@getByCategory')->name('articles_by_category');
Route::get('/categories','ArticleController@getCategories')->name('articles_by_category');
//Route::get('/article/{id}','ArticleController@getArticle')->name('article');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');