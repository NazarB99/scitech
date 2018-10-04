<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getByCategory()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->get();

        return ArticleResource::collection($articles);
    }

    public function getCategories()
    {
        $articles = Category::all();

        return CategoryResource::collection($articles);
    }

    public function getArticle($id)
    {
        $article = Article::find($id);

        return response()->json($article);
    }

    public function getFirstByCategory($id)
    {
        $articles = Article::with('category')->where('category_id',$id)->orderBy('created_at', 'desc')->first();

        return $articles;
    }

}
