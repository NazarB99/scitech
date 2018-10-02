<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getByCategory()
    {
        $articles = Article::orderBy('created_at', 'desc')
            ->get();

        return ArticleResource::collection($articles);
    }

    public function getFirstByCategory($id)
    {
        $articles = Article::with('category')->where('category_id',$id)->orderBy('created_at', 'desc')->first();

        return $articles;
    }

}
