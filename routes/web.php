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
Route::get('/login', function (){
    return view('login');
});

Route::get('/main', function (){
    return view('admin.main')->with('categories',\App\Category::with('articles')->get());
})->middleware('admin');

Route::get('/create/category',function (){
    return view('admin.create_category');
})->middleware('admin');

Route::post('/post/category',[
   'uses' => 'ArticleController@postCategory',
   'as' => 'post.category'
])->middleware('admin');

Route::get('/create/article',function (){
    return view('admin.create_article')->with('categories',\App\Category::all());
})->middleware('admin');

Route::post('/post/article',[
    'uses' => 'ArticleController@postArticle',
    'as' => 'post.article'
])->middleware('admin');

Route::post('/post/image',[
    'uses' => 'ArticleController@postImage',
])->middleware('admin');

Route::get('/{any?}', function (){
    return view('main')
        ->with('articles',\App\Article::with('category')->orderBy('created_at','desc')->get())
        ->with('categories',\App\Category::with('articles')->get());
})->where('any', '.*');



//Route::get('/', function () {
//    return view('main');
//});

Route::get('/articles','ArticleController@getByCategory')->name('articles_by_category');
Route::get('/categories','ArticleController@getCategories')->name('articles_by_category');
//Route::get('/article/{id}','ArticleController@getArticle')->name('article');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');